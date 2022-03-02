<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estado extends Model
{
    use SoftDeletes;

    protected $table = 'estado';
    protected $primaryKey = 'idestado';

    protected $fillable = [
        'nombreestado',
    ];

    public function notas()
    {
    	return $this->hasMany(Nota::class);
    }
}
