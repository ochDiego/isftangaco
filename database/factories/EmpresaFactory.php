<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = fake()->company();

        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre),
            'telefono' => fake()->e164PhoneNumber(),
            'ubicacion' => fake()->streetAddress(),
        ];
    }
}
