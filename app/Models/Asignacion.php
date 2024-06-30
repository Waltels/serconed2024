<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //relacion uno a muchos inversa
    public function docente(){
        return $this->belongsTo(Docente::class);
    }
    public function nivel(){
        return $this->belongsTo(Docente::class);
    }
    public function grado(){
        return $this->belongsTo(Grado::class);
    }
}
