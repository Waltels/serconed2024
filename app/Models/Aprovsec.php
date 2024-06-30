<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprovsec extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //relacion uno a muchos inversa
    public function docente(){
        return $this->belongsTo(Docente::class);
    }
    public function trimestre(){
        return $this->belongsTo(Trimestre::class);
    }
    public function grado(){
        return $this->belongsTo(Grado::class);
    }
    public function area(){
        return $this->belongsTo(Area::class);
    }
}
