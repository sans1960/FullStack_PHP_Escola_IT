<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\CatalogController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'home']);
Route::get('/login',[LoginUserController::class,'login']);
Route::get('/logout',[LoginUserController::class,'logout']);
Route::get('/register',[LoginUserController::class,'register']);
Route::get('/recuperar',[LoginUserController::class,'recuperar']);
Route::post('/login',[LoginUserController::class,'loginUsuario']);
Route::post('/register',[LoginUserController::class,'registerUsuario']);
Route::post('/recuperar',[LoginUserController::class,'recuperarPassword']);

Route::resource('/catalog', CatalogController::class);
