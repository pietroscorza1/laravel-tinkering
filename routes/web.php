<?php

use App\Http\Controllers\CineController;
use App\Http\Controllers\PeliculaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/peliculas', [PeliculaController::class, 'index'])->name('peliculas.index');
Route::get('/peliculas/create', [PeliculaController::class, 'create'])->name('peliculas.create');

Route::post('/peliculas', [PeliculaController::class, 'store'])->name('peliculas.store');

Route::get('/peliculas/{id}', [PeliculaController::class, 'show'])->name('peliculas.show');
Route::get('/peliculas/{id}/edit', [PeliculaController::class, 'edit'])->name('peliculas.edit');
Route::put('/peliculas/update/{id}', [PeliculaController::class, 'update'])->name('peliculas.update');
Route::delete('/peliculas/{pelicula}', [PeliculaController::class, 'destroy'])->name('peliculas.destroy');


Route::get('/cines  ', [CineController::class, 'index'])->name('cines.index');
Route::get('/cines/create', [CineController::class, 'create'])->name('cines.create');

Route::post('/cines', [CineController::class, 'store'])->name('cines.store');

Route::get('/cines/{id}', [CineController::class, 'show'])->name('cines.show');
Route::get('/cines/{id}/edit', [CineController::class, 'edit'])->name('cines.edit');
Route::put('/cines/update/{id}', [CineController::class, 'update'])->name('cines.update');
Route::delete('/cines/{pelicula}', [CineController::class, 'destroy'])->name('cines.destroy');
