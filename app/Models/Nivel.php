<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //relacion uno a muchos
    public function asignacion(){
        return $this->hasMany(Asignacion::class);
    }
    public function grado(){
        return $this->hasMany(Grado::class);
    }
    public function estudiante(){
        return $this->hasMany(Estudiante::class);
    }

    //relacion uno a muchos inversa
    public function gestion(){
        return $this->belongsTo(Gestion::class);
    }
}
