<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //relacion uno a muchos
    public function admin(){
        return $this->hasMany(Admin::class);
    }
    public function docente(){
        return $this->hasMany(Docente::class);
    }
    public function estudiante(){
        return $this->hasMany(Estudiante::class);
    }


    //relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
        
}
