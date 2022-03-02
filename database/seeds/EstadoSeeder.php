<?php

use Illuminate\Database\Seeder;
use App\Estado;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [[
            'nombreestado' => 'Sin evaluación',
        ],[
            'nombreestado' => 'Aprobado',
        ],[
            'nombreestado' => 'Desaprobado',
        ]];

        foreach ($array as $item)
            Unidad::create($item);
    }
}
