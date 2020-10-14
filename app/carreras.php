<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carreras extends Model
{
    public function aulas()
    {
        return $this->hasMany('App\aulas');
    }
    protected $fillable = [
        'nombre'
    ];
}
