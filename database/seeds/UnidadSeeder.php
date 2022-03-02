<?php

use Illuminate\Database\Seeder;
use App\Unidad;

class UnidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [[
            'orden' => 1,
            'nombreunidad' => 'Unidad Didáctica 1',
            'descripcion' => 'En esta sesión, conocerás los objetivos del curso y el contenido de cada unidad. Dominarás información general sobre los Premios Effie; asimismo, sobre los postulantes y jurados de los concursos.',
            'tiempoestimado' => 10,
            'idedicion' => 1,
        ],[
            'orden' => 2,
            'nombreunidad' => 'Unidad Didáctica 2',
            'descripcion' => 'Conocerás las diferentes categorías en las que se puede participar en los Premios Effie, conocerás los tipos de premios y puntajes necesarios para ganarlos; además, dominarás la estructura ideal de un caso concursante.',
            'tiempoestimado' => 15,
            'idedicion' => 1,
        ],[
            'orden' => 3,
            'nombreunidad' => 'Unidad Didáctica 3',
            'descripcion' => 'En esta sesión, identificarás el rol de jurado: perfil, tareas, funciones, dinámica de trabajo, kit de herramientas, el cronograma de los Premios Effie, así como algunas recomendaciones para el día del evento.',
            'tiempoestimado' => 10,
            'idedicion' => 1,
        ],[
            'orden' => 4,
            'nombreunidad' => 'Unidad Didáctica 4',
            'descripcion' => 'En esta última sesión, te sumergirás en la metodología Effie para la evaluación de casos. Conocerás las claves para ganar un Effie y los fundamentos de cada segmento de la estructura de los casos concursantes.',
            'tiempoestimado' => 15,
            'idedicion' => 1,
        ]];

        foreach ($array as $item)
            Unidad::create($item);
    }
}
