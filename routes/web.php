<?php

use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\VehiculoController;

// Ruta para tecnicos
Route::resource('tecnicos', TecnicoController::class);


Route::resource('orden', OrdenController::class);
// Ruta para vehiculos (si está funcionando, ya debe estar en tu archivo)
Route::resource('vehiculos', VehiculoController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

