<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aulas extends Model
{
    public function alumnos()
    {
        return $this->hasMany('App\alumnos');
    }
    protected $fillable = [
        'seccion', 'carrera'
    ];
}
