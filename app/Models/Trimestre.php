<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trimestre extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //relacion uno a muchos
    public function aprovsec(){
        return $this->hasMany(Aprovsec::class);
    }
    public function aprovprim(){
        return $this->hasMany(Aprovprim::class);
    }
}
