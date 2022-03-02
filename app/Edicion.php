<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Edicion extends Model
{
    use SoftDeletes;

    protected $table = 'edicion';
    protected $primaryKey = 'idedicion';

    protected $fillable = [
        'anho',
    ];

    public function unidades()
    {
    	return $this->hasMany(Unidad::class);
    }

    public function usuarios()
    {
    	return $this->hasMany(User::class);
    }
}
