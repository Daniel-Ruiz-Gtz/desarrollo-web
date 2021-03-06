<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\GrabacionController;
use App\Http\Controllers\RecursoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function() {
    Route::resource('alumno', AlumnoController::class);
    Route::resource('recurso', RecursoController::class);
    Route::resource('categoria', CategoriaController::class);

    Route::post('grabacion/calificar/{grabacion}', [GrabacionController::class, 'calificar'])->name('grabacion.calificar');
    Route::resource('grabacion', GrabacionController::class);
});
