<?php

namespace Database\Seeders;

use App\Models\Aprovprim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AprovprimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aprovprim::factory(10)->create();
    }
}
