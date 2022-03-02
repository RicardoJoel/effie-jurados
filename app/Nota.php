<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nota extends Model
{
    use SoftDeletes;

    protected $table = 'notas';
    protected $primaryKey = 'idnotas';

    protected $fillable = [
        'idusuario', 'unidad', 'idestado', 'oportunidad' 
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    public function unidad()
    {
    	return $this->belongsTo(Unidad::class);
    }

    public function estado()
    {
    	return $this->belongsTo(Estado::class);
    }
}
