<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\OrdenController;
use App\Http\Controllers\VehiculoController;

Route::get('/tecnicos/create', [TecnicoController::class, 'create'])->name('tecnico.create');
Route::post('/tecnicos/store', [TecnicoController::class, 'store'])->name('tecnico.store');
Route::resource('orden', OrdenController::class);
Route::resource('vehiculos', VehiculoController::class);
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');