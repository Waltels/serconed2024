<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //relacion uno a muchos
    public function docente(){
        return $this->hasMany(Docente::class);
    }
    
    public function estudiante(){
        return $this->hasMany(Estudiante::class);
    }
    public function nota(){
        return $this->hasMany(Nota::class);
    }
    public function aprovsec(){
        return $this->hasMany(Aprovsec::class);
    }
    public function aprovprim(){
        return $this->hasMany(Aprovprim::class);
    }
}
