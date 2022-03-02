<?php

namespace App\Http\Controllers;

use App\Nota;
use App\User;
use App\Unidad;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected const EDIC_ANHO_MIN = 2019;
    protected const EDIC_ANHO_MAX = 2020;
    protected const SPAN_USER_ANO = 'El año a buscar debe estar comprendido entre '.self::EDIC_ANHO_MIN.' y '.self::EDIC_ANHO_MAX.'.';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = User::orderBy('nombre','ASC')->paginate(10);
        return view('usuario.index', compact('usuario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre'=>'required|text|max:150',
            'apellido'=>'required|text|max:150',
            'edad'=>'required|numeric',
            'empresa'=>'required|text|max:150',
            'tipoempresa'=>'required|text|max:150',
            'cargo'=>'required|text|max:150',
            'anosexperiencia'=>'required|numeric',
            'telefono'=>'required|text|max:150',
            'email'=>'required|email|unique:posts|max:150',
            'password'=>'required|text|min:8|max:100',
            'fecharegistro'=>'required|text|min:8|max:100',
            'jurado'=>'required|text|max:100',
            'acepto'=>'required|text|max:100',
            'idedicion'=>'required|numeric',
        ]);
        User::create($request->all());
        return redirect()->route('usuario.index')->with('success','Registro creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if (!$user->is_viewed)
        {
            $user->is_viewed = true;
            $user->save();
        }
        return view('single', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('usuario.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nombre'=>'required|text|max:150',
            'apellido'=>'required|text|max:150',
            'edad'=>'required|numeric',
            'empresa'=>'required|text|max:150',
            'tipoempresa'=>'required|text|max:150',
            'cargo'=>'required|text|max:150',
            'anosexperiencia'=>'required|numeric',
            'telefono'=>'required|text|max:150',
            'email'=>'required|email|unique:posts|max:150',
            'password'=>'required|text|min:8|max:100',
            'fecharegistro'=>'required|text|min:8|max:100',
            'jurado'=>'required|text|max:100',
            'acepto'=>'required|text|max:100',
            'idedicion'=>'required|numeric',
        ]);
        User::find($id)->update($request->all());
        return redirect()->route('usuario.index')->with('success','Registro actualizado satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('usuario.index')->with('success','Registro eliminado satisfactoriamente.');
    }
    
    public function activate($code)
    {
        $usuario = User::where('confirmation_code',$code);
        $exist = $usuario->count();
        $user = $usuario->first();
        if ($exist == 1 and $user->email_verified_at == NULL) {
            $id = $user->id;
            return view('auth.date_complete',compact('id'));
        }
        else {
            return redirect::to('login');
        }
    }

    public function complete(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->email_verified_at = now();
        $user->save();
        return redirect::to('login');
    }

    public function buscarUsuarios(Request $request)
    {
        if ($request->anho < self::EDIC_ANHO_MIN || $request->anho > self::EDIC_ANHO_MAX)
            return response()->json(['success' => 'false', 'message' => self::SPAN_USER_ANO], 400);
        
        $users = User::leftJoin('edicion','edicion.idedicion','=','usuario.idedicion')
                        ->where('edicion.anho','=',$request->anho)
                        ->orderByRaw('is_viewed ASC','nombre ASC')
                        ->get('usuario.*');
        $array = array();
        foreach ($users as $user) {
            $nivel = Nota::leftJoin('estado','estado.idestado','=','notas.idestado')
                            ->where('notas.idusuario','=',$user->idusuario)
                            ->where('estado.nombreestado','Aprobado')
                            ->max('notas.unidad');
            $array[] = array(
                'id' => $user->idusuario,
                'nombre' => $user->nombre.' '.$user->apellido,
                'email' => $user->email,
                'nivel' => $nivel === NULL ? '' : Unidad::find($nivel)->nombreunidad,
                'is_viewed' => $user->is_viewed,
                'inscripcion' => date('d/m/Y', strtotime($user->created_at)),
            );
        }
        echo json_encode($array);
    }
}
