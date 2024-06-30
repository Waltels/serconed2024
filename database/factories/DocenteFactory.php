<?php

namespace Database\Factories;

use App\Models\Dato;
use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\Boolean;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docente>
 */
class DocenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dato_id'=> Dato::all()->unique()->random()->id,
            'rda'=> fake()->randomNumber(6, true),
            'funcion'=> fake()->word(),
            'item'=>fake()->randomNumber(4, true),
            'antiguedad'=>fake()->randomNumber(2, true),
            'estado_doc'=> fake()->boolean(),
        ];
    }
}
