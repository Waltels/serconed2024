<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    const Retirado_Traslado = 1;
    const Retirado_Abandono = 2;
    const Efectivo = 3;

    //relacion uno a muchos
    public function nota(){
        return $this->hasMany(Nota::class);
    }

    //relacion uno a muchos inversa
    public function dato(){
        return $this->belongsTo(Dato::class);
    }
    public function nel(){
        return $this->belongsTo(Nivel::class);
    }
    public function grado(){
        return $this->belongsTo(Grado::class);
    }
    public function area(){
        return $this->belongsTo(Area::class);
    }

}
