<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\Docente;
use App\Models\Grado;
use App\Models\Trimestre;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aprovsec>
 */
class AprovsecFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'docente_id'=> Docente::all()->unique()->random()->id,
            'trimestre_id'=> Trimestre::all()->unique()->random()->id,
            'grado_id'=> Grado::all()->unique()->random()->id,
            'area_id'=> Area::all()->unique()->random()->id,
            'c_prog'=>fake()->randomNumber(2, true),
            'c_des'=>fake()->randomNumber(2, true),
            'promedio'=>fake()->randomNumber(2, true),
        ];
    }
}
