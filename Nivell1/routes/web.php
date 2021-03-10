<?php

use App\Http\Controllers\PrimerController;
use App\Http\Controllers\SegonController;
use App\Http\Controllers\TercerController;


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
Route::get('primera',[PrimerController::class,'index']);
Route::get('segona',[SegonController::class,'index']);
Route::get('tercera/{nom}',[TercerController::class,'benvingut']);

