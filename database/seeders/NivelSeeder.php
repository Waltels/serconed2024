<?php

namespace Database\Seeders;

use App\Models\Gestion;
use App\Models\Nivel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nivel::create([
            'nivel'=>'Inicial',
            'turno'=>'Mañana/Tarde',
            'estado'=> random_int(1,2),
            'gestion_id'=> Gestion::all()->random()->id,
        ]);

        Nivel::create([
            'nivel'=>'Primario',
            'turno'=>'Mañana/Tarde',
            'estado'=> random_int(1,2),
            'gestion_id'=> Gestion::all()->random()->id,
        ]);
        Nivel::create([
            'nivel'=>'Secundario',
            'turno'=>'Mañana/Tarde', 
            'estado'=> random_int(1,2),
            'gestion_id'=> Gestion::all()->random()->id,
        ]);
    }
}
