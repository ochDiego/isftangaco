<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AsignaturaController;
use App\Http\Controllers\Admin\CarreraController;

Route::get('/', [HomeController::class, 'index'])->name('admin.home');

Route::resource('asignaturas', AsignaturaController::class)->except('show')->names('admin.asignaturas');

Route::resource('carreras', CarreraController::class)->except('show')->names('admin.carreras');