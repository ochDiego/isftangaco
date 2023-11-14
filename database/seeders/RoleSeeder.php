<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'Admin']);

        Permission::create(['name' => 'admin.home','description' => 'Ver panel de administración'])->syncRoles($admin);

        Permission::create(['name' => 'admin.usuarios.index','description' => 'Ver lista de usuarios'])->syncRoles($admin);
        Permission::create(['name' => 'admin.usuarios.edit','description' => 'Asignar rol/es'])->syncRoles($admin);

        Permission::create(['name' => 'admin.roles.index','description' => 'Ver lista de roles'])->syncRoles($admin);
        Permission::create(['name' => 'admin.roles.create','description' => 'Registrar roles'])->syncRoles($admin);
        Permission::create(['name' => 'admin.roles.edit','description' => 'Editar roles'])->syncRoles($admin);
        Permission::create(['name' => 'admin.roles.destroy','description' => 'Eliminar roles'])->syncRoles($admin);

        Permission::create(['name' => 'admin.profesores.index','description' => 'Ver lista de profesores'])->syncRoles($admin);
        Permission::create(['name' => 'admin.profesores.create','description' => 'Registrar profesores'])->syncRoles($admin);
        Permission::create(['name' => 'admin.profesores.edit','description' => 'Editar profesores'])->syncRoles($admin);
        Permission::create(['name' => 'admin.profesores.destroy','description' => 'Eliminar profesores'])->syncRoles($admin);

        Permission::create(['name' => 'admin.asignaturas.index','description' => 'Ver lista de asignaturas'])->syncRoles($admin);
        Permission::create(['name' => 'admin.asignaturas.create','description' => 'Registrar asignaturas'])->syncRoles($admin);
        Permission::create(['name' => 'admin.asignaturas.edit','description' => 'Editar asignaturas'])->syncRoles($admin);
        Permission::create(['name' => 'admin.asignaturas.destroy','description' => 'Eliminar asignaturas'])->syncRoles($admin);

        Permission::create(['name' => 'admin.carreras.index','description' => 'Ver lista de carreras'])->syncRoles($admin);
        Permission::create(['name' => 'admin.carreras.create','description' => 'Registrar carreras'])->syncRoles($admin);
        Permission::create(['name' => 'admin.carreras.edit','description' => 'Editar carreras'])->syncRoles($admin);
        Permission::create(['name' => 'admin.carreras.destroy','description' => 'Eliminar carreras'])->syncRoles($admin);

        Permission::create(['name' => 'admin.tiposlicencia.index','description' => 'Ver lista de tipos de licencia'])->syncRoles($admin);
        Permission::create(['name' => 'admin.tiposlicencia.create','description' => 'Registrar tipos de licencia'])->syncRoles($admin);
        Permission::create(['name' => 'admin.tiposlicencia.edit','description' => 'Editar tipos de licencia'])->syncRoles($admin);
        Permission::create(['name' => 'admin.tiposlicencia.destroy','description' => 'Eliminar tipos de licencia'])->syncRoles($admin);

        Permission::create(['name' => 'admin.licencias.index','description' => 'Ver lista de licencias'])->syncRoles($admin);
        Permission::create(['name' => 'admin.licencias.create','description' => 'Registrar licencias'])->syncRoles($admin);
        Permission::create(['name' => 'admin.licencias.edit','description' => 'Editar licencias'])->syncRoles($admin);
        Permission::create(['name' => 'admin.licencias.destroy','description' => 'Eliminar licencias'])->syncRoles($admin);
    }
}
