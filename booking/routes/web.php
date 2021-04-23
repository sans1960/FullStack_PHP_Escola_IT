<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ReservaController;

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

Route::get('/', [EntradaController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('categorias', CategoriaController::class)->middleware(['auth'])->names('categorias');
Route::resource('galerias', GaleriaController::class)->middleware(['auth'])->names('galerias');
Route::resource('clientes', ClienteController::class)->middleware(['auth'])->names('clientes');
Route::resource('reservas', ReservaController::class)->middleware(['auth'])->names('reservas');
