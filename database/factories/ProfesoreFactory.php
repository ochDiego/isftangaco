<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProfesoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = fake()->name();

        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre),
            'dni' => fake()->numberBetween(10000000,36000000),
            'email' => fake()->unique()->safeEmail(),
            'telefono' => '264' . fake()->numberBetween(4000000,4999999),
            'fecha_nac' => fake()->date(),
            'domicilio' => fake()->streetAddress(),
        ];
    }
}
