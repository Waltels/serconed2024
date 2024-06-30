<?php

namespace Database\Factories;

use App\Models\Area;
use App\Models\Dato;
use App\Models\Estudiante;
use App\Models\Grado;
use App\Models\Nivel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rude'=>fake()->randomNumber(9, true),
            'name'=>fake()->words(3, true),
            'dato_id'=> Dato::all()->unique()->random()->id,
            'nivel_id'=> Nivel::all()->unique()->random()->id,
            'grado_id'=> Grado::all()->unique()->random()->id,
            'area_id'=> Area::all()->unique()->random()->id,
            'estado_est'=>$this->faker->randomElement([Estudiante::Retirado_Traslado, Estudiante::Retirado_Abandono, Estudiante::Efectivo]),
            
        ];
    }
}
