<?php

namespace Database\Factories;
use App\Models\Maestro;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Maestro>
 */
class MaestroFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'email' =>fake()->unique()->safeEmail(),
            'direccion' => fake()->address(),
            'fecha_naciminiento' => fake()->date(),
            'clase_asignada' => fake()->randomElement(['Matematicas', 'Lenguaje', 'Sociales', 'Ciencia','Ingles'] )
        ];
    }
}
