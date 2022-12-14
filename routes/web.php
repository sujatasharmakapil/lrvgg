<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;

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
Route::get('/insert', [indexController::class,'insert']);
Route::post('/insert', [indexController::class,'do_insert']);
Route::get('/show',[indexController::class,'show']);
Route::post('/show',[indexController::class,'do_show']);
Route::get('/first',[indexController::class,'first']);
Route::post('/delete-plan', [indexController::class,'delete_plan']);
Route::get('/edit/{id}',[indexController::class,'edit']);
Route::post('/edit', [indexController::class,'do_edit']);