<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registro>
 */
class RegistroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'asistencia' => fake()->randomElement(['Asistió temprano (A)', 'Asistió tarde (T)', 'Faltó (F)']),
            'alumno_id'=> fake()->numberBetween(1,20)
        ];
    }
}