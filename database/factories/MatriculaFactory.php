<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matricula>
 */
class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'asignatura_id'=> fake()->numberBetween(1, 20),
            'docente_id'=> fake()->numberBetween(1, 20),
            'alumno_id'=> fake()->numberBetween(1, 20),
        ];
    }
}