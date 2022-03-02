<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [[
            'nombre' => 'Jimmy',
            'apellido' => 'Aliano',
            'edad' => 32,
            'empresa' => 'Preciso Agencia de contenidos',
            'tipoempresa' => 'agencia',
            'cargo' => 'Desarrollador Web',
            'anosexperiencia' => 5,
            'telefono' => '986154754',
            'jurado' => false,
            'email' => 'jaliano@admin.com',
            'password' => Hash::make('ToP%$YGy'),
            'acepto' => true,
            'edicion_id' => 1,
        ],[
            'nombre' => 'Daniella',
            'apellido' => 'Isasi Mariategui',
            'edad' => 22,
            'empresa' => 'Preciso',
            'tipoempresa' => 'independiente',
            'cargo' => 'Ejecutiva de cuentas',
            'anosexperiencia' => 1,
            'telefono' => '947212065',
            'jurado' => false,
            'email' => 'disasi@preciso.pe',
            'password' => Hash::make('ToP%$YGy'),
            'acepto' => true,
            'edicion_id' => 1,
        ],[
            'nombre' => 'Christian',
            'apellido' => 'Navarro Rojas',
            'edad' => 46,
            'empresa' => 'Preciso',
            'tipoempresa' => 'agencia',
            'cargo' => 'Director',
            'anosexperiencia' => 10,
            'telefono' => '51',
            'jurado' => false,
            'email' => 'cnavarro@preciso.pe',
            'password' => Hash::make('ToP%$YGy'),
            'acepto' => true,
            'edicion_id' => 1,
        ],[
            'nombre' => 'Claudia',
            'apellido' => 'Vega',
            'edad' => 40,
            'empresa' => 'Effie',
            'tipoempresa' => 'independiente',
            'cargo' => 'coord',
            'anosexperiencia' => 20,
            'telefono' => '2222',
            'jurado' => false,
            'email' => 'claudiavegavegazo@gmail.com',
            'password' => Hash::make('ToP%$YGy'),
            'acepto' => true,
            'edicion_id' => 1,
        ],[
            'nombre' => 'Luis',
            'apellido' => 'Corvera',
            'edad' => 44,
            'empresa' => 'Preciso Agencia de contenidos',
            'tipoempresa' => 'independiente',
            'cargo' => 'Director general',
            'anosexperiencia' => 9,
            'telefono' => '4374445',
            'jurado' => false,
            'email' => 'lcorvera@preciso.pe',
            'password' => Hash::make('ToP%$YGy'),
            'acepto' => true,
            'edicion_id' => 1,
        ],[
            'nombre' => 'FEDERICO MIGUEL',
            'apellido' => 'ROSADO ZAVALA',
            'edad' => 54,
            'empresa' => 'UNIVERSIDAD CATÓLICA DE SANTA MARÍA',
            'tipoempresa' => 'educacion',
            'cargo' => 'DIRECTOR DE LA ESCUELA DE PUBLICIDAD',
            'anosexperiencia' => 29,
            'telefono' => '958222355',
            'jurado' => false,
            'email' => 'ficorosado@gmail.com',
            'password' => Hash::make('ToP%$YGy'),
            'acepto' => true,
            'edicion_id' => 1,
        ],[
            'nombre' => 'Paul',
            'apellido' => 'Uchima',
            'edad' => 44,
            'empresa' => 'Comunica +A',
            'tipoempresa' => 'agencia',
            'cargo' => 'Director Creativo General',
            'anosexperiencia' => 20,
            'telefono' => '952578986',
            'jurado' => true,
            'email' => 'puchima@comunicamasa.com',
            'password' => Hash::make('ToP%$YGy'),
            'acepto' => true,
            'edicion_id' => 1,
        ],[
            'nombre' => 'Paul',
            'apellido' => 'Uchima',
            'edad' => 44,
            'empresa' => 'Comunica +A',
            'tipoempresa' => 'agencia',
            'cargo' => 'Director Creativo General',
            'anosexperiencia' => 20,
            'telefono' => '952578986',
            'jurado' => true,
            'email' => 'puchima@comunicamasa.com.pe',
            'password' => Hash::make('ToP%$YGy'),
            'acepto' => true,
            'edicion_id' => 1,
        ],[
            'nombre' => 'Leonid',
            'apellido' => 'Tito Pacamia',
            'edad' => 38,
            'empresa' => 'Caja Cusco',
            'tipoempresa' => 'gobierno',
            'cargo' => 'Gerente de Marketing',
            'anosexperiencia' => 11,
            'telefono' => '997063852',
            'jurado' => false,
            'email' => 'leonid.tito@gmail.com',
            'password' => Hash::make('ToP%$YGy'),
            'acepto' => true,
            'edicion_id' => 1,
        ],[
            'nombre' => 'ADMIN2020',
            'email' => 'admin@preciso.pe',
            'password' => Hash::make('RvMl2IG#'),
            'is_admin' => true,
            'jurado' => false,
            'acepto' => true,
        ]];
        
        foreach ($array as $item)
            User::create($item);
    }
}
