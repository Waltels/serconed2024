<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprovprim extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //relacion uno a muchos inversa
    public function trimestre(){
        return $this->belongsTo(Trimestre::class);
    }
    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function grado(){
        return $this->belongsTo(Grado::class);
    }
}
