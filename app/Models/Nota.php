<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //relacion uno a muchos inversa
    public function docente(){
        return $this->belongsTo(Docente::class);
    }
    //relacion uno a muchos inversa
    public function estudiante(){
        return $this->belongsTo(Estudiante::class);
    }
    //relacion uno a muchos inversa
    public function area(){
        return $this->belongsTo(Area::class);
    }
}
