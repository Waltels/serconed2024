<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\Docente;
use App\Models\Estudiante;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nota>
 */
class NotaFactory extends Factory
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
            'estudiante_id'=> Estudiante::all()->unique()->random()->id,
            'area_id'=> Area::all()->unique()->random()->id,
            'nota1'=>fake()->randomNumber(2, true),
            'nota2'=>fake()->randomNumber(2, true),
            'nota3'=>fake()->randomNumber(2, true),
            'promedio'=>fake()->randomNumber(2, true),

        ];
    }
}
