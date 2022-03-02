<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Respuesta extends Model
{
    use SoftDeletes;

    protected $table = 'respuesta';
    protected $primaryKey = 'idrespuesta';

    protected $fillable = [
        'respuesta', 'idpregunta', 'correcto'
    ];

    public function pregunta()
    {
    	return $this->belongsTo(Pregunta::class);
    }
}
