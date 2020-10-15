<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    protected $fillable = [
        'matricula', 'nombre', 'promedio', 'aula'
    ];
    protected $table = 'alumnos';
}
