<?php

namespace Database\Seeders;

use App\Models\Gestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gestion::create([
            'gestion'=> '2020',
            'estado'=> random_int(1,2),
        ]);
        Gestion::create([
            'gestion'=> '2021',
            'estado'=> random_int(1,2),
        ]);
        Gestion::create([
            'gestion'=> '2022',
            'estado'=> random_int(1,2),
        ]);
        Gestion::create([
            'gestion'=> '2023',
            'estado'=> random_int(1,2),
        ]);
        Gestion::create([
            'gestion'=> '2024',
            'estado'=> random_int(1,2),
        ]);
    }
}
