<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    
    //relacion uno a muchos
    public function asignacion(){
        return $this->hasMany(Asignacion::class);
    }
    public function nota(){
        return $this->hasMany(Nota::class);
    }
    public function aprovsec(){
        return $this->hasMany(Aprovsec::class);
    }
    //relacion uno a muchos inversa
    public function dato(){
        return $this->belongsTo(Dato::class);
    }
    public function area(){
        return $this->belongsTo(Area::class);
    }
}
