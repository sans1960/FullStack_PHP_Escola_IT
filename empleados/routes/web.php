<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\LoginController;
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

Route::get('/',[HomeController::class,'home']);
Route::resource('empleados', EmpleadoController::class);
Route::get('/busqueda',[EmpleadoController::class,'search']);
Route::get('/busqueda/resultado',[EmpleadoController::class,'result']);
Route::get('/login/login',[LoginController::class,'login']);
Route::get('/login/register',[LoginController::class,'register']);
Route::get('/login/recuperar',[LoginController::class,'recuperar']);


