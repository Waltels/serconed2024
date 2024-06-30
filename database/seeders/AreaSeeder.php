<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Boolean;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Area::create([
            'area'=>'Lenguaje y Comunicaciones',
            'estado'=>random_int(1,2),
        ]);
        Area::create([
            'area'=>'Ciencias Sociales',
            'estado'=>random_int(1,2),
        ]);
        Area::create([
            'area'=>'Educacion Fisica',
            'estado'=>random_int(1,2),
        ]);
        Area::create([
            'area'=>'Educacion Musical',
            'estado'=>random_int(1,2),
        ]);
        Area::create([
            'area'=>'Artes Plasticas',
            'estado'=>random_int(1,2),
        ]);
        Area::create([
            'area'=>'Ciencias naturales',
            'estado'=>random_int(1,2),
        ]);
        Area::create([
            'area'=>'Matematicas',
            'estado'=>random_int(1,2),
        ]);
        Area::create([
            'area'=>'Tecnica Tecnologica',
            'estado'=>random_int(1,2),
        ]);
        Area::create([
            'area'=>'Valores Espiritualidad y Religiones',
            'estado'=>random_int(1,2),
        ]);
    }
}
