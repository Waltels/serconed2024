<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //relacion uno a muchos inversa
    public function dato(){
        return $this->belongsTo(Dato::class);
    }
}
