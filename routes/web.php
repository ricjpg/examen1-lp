<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorioController;
use App\Http\Controllers\ContactoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/directorios', [DirectorioController::class, 'index'])->name('directorio.index');
Route::get('/directorios/crear', [DirectorioController::class, 'crear'])->name('directorio.crear');
Route::post('/directorios/guardar', [DirectorioController::class, 'guardar'])->name('directorio.guardar');

Route::get('/directorios/buscar', [DirectorioController::class, 'buscar'])->name('directorio.buscar');
Route::get('/directorios/buscar/resultado', [DirectorioController::class, 'resultado'])->name('directorio.resultado');
Route::get('/directorios/vercontacto/{codigoEntrada}', [DirectorioController::class, 'vercontacto'])->name('directorio.vercontacto');
Route::get('/directorios/eliminar', [DirectorioController::class, 'eliminar'])->name('directorio.eliminar');

Route::get('/contacto/crear/', [ContactoController::class, 'crear'])->name('contacto.crear');
Route::post('/contacto/guardar', [ContactoController::class, 'guardar'])->name('contacto.guardar');

