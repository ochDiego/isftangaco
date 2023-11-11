<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AsignaturaController;
use App\Http\Controllers\Admin\CarreraController;
use App\Http\Controllers\Admin\TipoLicenciaController;
use App\Http\Controllers\Admin\LicenciaController;

Route::get('/', [HomeController::class, 'index'])->name('admin.home');

Route::resource('asignaturas', AsignaturaController::class)->except('show')->names('admin.asignaturas');

Route::resource('carreras', CarreraController::class)->names('admin.carreras');

Route::resource('tipos-licencia', TipoLicenciaController::class)->except('show')->parameters(['tipos-licencia' => 'tipolicencia'])->names('admin.tiposlicencia');

Route::resource('licencias', LicenciaController::class)->except('show')->names('admin.licencias');