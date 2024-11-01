<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\VehiculoController;

Route::resource('vehiculos', VehiculoController::class);
Route::resource('orden', OrdenController::class);
Route::resource('tecnicos', TecnicoController::class);

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
