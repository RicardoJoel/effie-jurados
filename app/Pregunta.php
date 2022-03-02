<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pregunta extends Model
{
    use SoftDeletes;

    protected $table = 'preguntas';
    protected $primaryKey = 'idpreguntas';

    protected $fillable = [
        'pregunta', 'idunidad'
    ];

    public function unidad()
    {
    	return $this->belongsTo(Unidad::class);
    }

    public function respuestas()
    {
    	return $this->hasMany(Respuesta::class);
    }
}
