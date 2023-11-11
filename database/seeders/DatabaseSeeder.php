<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Models\Asignatura;
use App\Models\Carrera;
use App\Models\Licencia;
use App\Models\TipoLicencia;
use App\Models\Empresa;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        Storage::deleteDirectory('profesores');
        Storage::makeDirectory('profesores');

        $this->call([
            UserSeeder::class,
            ProfesoreSeeder::class,
        ]);
        Carrera::factory(2)->create();
        TipoLicencia::factory(10)->create();
        Licencia::factory(20)->create();
        Empresa::factory()->create();

        $this->call(AsignaturaSeeder::class);

    }
}
