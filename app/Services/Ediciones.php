<?php

namespace App\Services;

use App\Edicion;

class Ediciones
{
    public function get()
    {
        $ediciones = Edicion::orderBy('anho','ASC')->get();
        foreach ($ediciones as $edicion) {
            $array[$edicion->id] = $edicion->anho;
        }
        return $array;
    }
}
