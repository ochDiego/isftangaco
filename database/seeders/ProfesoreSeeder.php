<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profesore;
use App\Models\Image;

class ProfesoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profesores = Profesore::factory(20)->create();

        foreach ($profesores as $profesore) {
            Image::factory()->create([
                'imageable_id' => $profesore->id,
                'imageable_type' => Profesore::class,
            ]);

        }
    }
}
