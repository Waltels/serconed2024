<?php

namespace Database\Seeders;

use App\Models\Grado;
use App\Models\Nivel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grado::create([
            'nivel_id'=> Nivel::all()->random()->id,
            'curso'=>'Primero',
            'paralelo'=>'A',
            'estado'=> random_int(1,2),
        ]);
        Grado::create([
            'nivel_id'=> Nivel::all()->random()->id,
            'curso'=>'Segundo',
            'paralelo'=>'A',
            'estado'=> random_int(1,2),
        ]);
        Grado::create([
            'nivel_id'=> Nivel::all()->random()->id,
            'curso'=>'Tercero',
            'paralelo'=>'A',
            'estado'=> random_int(1,2),
        ]);
        Grado::create([
            'nivel_id'=> Nivel::all()->random()->id,
            'curso'=>'Cuarto',
            'paralelo'=>'A',
            'estado'=> random_int(1,2),
        ]);
        Grado::create([
            'nivel_id'=> Nivel::all()->random()->id,
            'curso'=>'Quinto',
            'paralelo'=>'A',
            'estado'=> random_int(1,2),
        ]);
        Grado::create([
            'nivel_id'=> Nivel::all()->random()->id,
            'curso'=>'Sexto',
            'paralelo'=>'A',
            'estado'=> random_int(1,2),
        ]);
    }
}
