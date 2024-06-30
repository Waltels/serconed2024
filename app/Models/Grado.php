<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //relacion uno a muchos
    public function asignacion(){
        return $this->hasMany(Asignacion::class);
    }
    public function estudiante(){
        return $this->hasMany(Estudiante::class);
    }
    public function aprovsec(){
        return $this->hasMany(Aprovsec::class);
    }
    public function aprovprim(){
        return $this->hasMany(Aprovsec::class);
    }

    //relacion uno a muchos inversa
    public function nivel(){
        return $this->belongsTo(Nivel::class);
    }
}
