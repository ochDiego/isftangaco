<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Asignatura;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $asignaturas = Asignatura::factory(30)->create();

        foreach ($asignaturas as $asignatura) {
            $asignatura->carreras()->attach([
                rand(1,2),
                rand(1,2)
            ]);
        }
    }
}
