<?php

namespace Database\Seeders;

use App\Models\Aprovsec;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AprovsecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aprovsec::factory(10)->create();
    }
}
