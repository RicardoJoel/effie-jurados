<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Unidad extends Model
{
    use SoftDeletes;

    protected $table = 'unidad';
    protected $primaryKey = 'idunidad';
    
    protected $fillable = [
        'orden', 'nombreunidad', 'descripcion', 'tiempoestimado', 'idedicion',
    ];

    public function edicion()
    {
    	return $this->belongsTo(Edicion::class);
    }

    public function notas()
    {
    	return $this->hasMany(Nota::class);
    }
}
