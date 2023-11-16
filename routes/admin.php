<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AsignaturaController;
use App\Http\Controllers\Admin\CarreraController;
use App\Http\Controllers\Admin\TipoLicenciaController;
use App\Http\Controllers\Admin\LicenciaController;
use App\Http\Controllers\Admin\ProfesoreController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\EmpresaController;
use App\Http\Controllers\Admin\AsistenciaController;

Route::get('/', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

Route::resource('usuarios', UserController::class)->except('show','create','store')->names('admin.usuarios');

Route::resource('roles', RoleController::class)->except('show')->names('admin.roles');

Route::resource('profesores', ProfesoreController::class)->names('admin.profesores');

Route::get('asistencias', [AsistenciaController::class, 'index'])->name('admin.asistencias.index');

Route::resource('asignaturas', AsignaturaController::class)->except('show')->names('admin.asignaturas');

Route::resource('carreras', CarreraController::class)->names('admin.carreras');

Route::resource('tipos-licencia', TipoLicenciaController::class)->except('show')->parameters(['tipos-licencia' => 'tipolicencia'])->names('admin.tiposlicencia');

Route::resource('licencias', LicenciaController::class)->except('show')->names('admin.licencias');

Route::resource('institucion', EmpresaController::class)->only('index','edit','update')->parameters(['institucion' => 'empresa'])->names('admin.empresas');