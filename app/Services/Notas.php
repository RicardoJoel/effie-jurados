<?php

namespace App\Services;

use App\Nota;

class Notas
{
    public function max($idusuario)
    {
        $nota = Nota::leftJoin('unidad','unidad.idunidad','=','notas.unidad')
                    ->leftJoin('estado','estado.idestado','=','notas.idestado')
                    ->where('notas.idusuario',$idusuario)
                    ->where('estado.nombreestado','Aprobado')
                    ->orderBy('unidad.orden','DESC')
                    ->get()->first();
        return $nota !== NULL ? $nota->nombreunidad : 'Ninguno';
    }

    public function get($idusuario)
    {
        $notas = Nota::leftJoin('unidad','unidad.idunidad','=','notas.unidad')
                    ->leftJoin('estado','estado.idestado','=','notas.idestado')
                    ->where('notas.idusuario',$idusuario)
                    ->orderBy('unidad.orden','ASC')
                    ->get();
        $index = 1;
        $array = array();  
        foreach ($notas as $nota) {
            $array[] = array(
                'index' => $index++,
                'unidad' => $nota->nombreunidad,
                'estado' => $nota->nombreestado,
                'intentos' => $nota->nombreestado == 'Sin evaluación' ? 0 : $nota->oportunidad + 1,
                'fecha' => $nota->nombreestado == 'Sin evaluación' ? '-' : date('d/m/Y', strtotime($nota->created_at))
            );
        }
        return $array;
    }
}
