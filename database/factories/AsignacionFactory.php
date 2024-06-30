<?php

namespace Database\Factories;

use App\Models\Docente;
use App\Models\Grado;
use App\Models\Nivel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asignacion>
 */
class AsignacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'docente_id'=> Docente::all()->random()->id,
            'nivel_id'=> Nivel::all()->random()->id,
            'grado_id'=> Grado::all()->random()->id,
        ];
    }
}
