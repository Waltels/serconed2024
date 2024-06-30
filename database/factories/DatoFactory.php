<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=> User::all()->unique()->random()->id,
            'ci' => fake()->randomNumber(7, true),
            'fecha_nac'=> fake()->date('Y_m_d'),
            'direccion'=> fake()->sentence(),
            'telefono'=> fake()->randomNumber(8, true),
            
        ];
    }
}
