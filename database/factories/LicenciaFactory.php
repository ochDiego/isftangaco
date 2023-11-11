<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TipoLicencia;
use App\Models\Profesore;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Licencia>
 */
class LicenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = fake()->unique()->sentence();

        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre),
            'fecha_inicio' => fake()->date(),
            'fecha_fin' => fake()->date(),
            'profesore_id' => Profesore::all()->random()->id,
            'tipo_licencia_id' => TipoLicencia::all()->random()->id,
        ];
    }
}
