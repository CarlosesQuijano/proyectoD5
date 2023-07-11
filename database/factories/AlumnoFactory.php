<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Alumno;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{

    /**
     * Define the model's default state.
     *
  * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'DNI' =>fake()->randomNumber(8),
        'nombre' => fake()->name(),
        'correo' =>fake()->unique()->safeEmail(),
        'direccion' => fake()->address(),
        'fecha_nacimiento' => fake()->date(),

            //
        ];
    }
}
