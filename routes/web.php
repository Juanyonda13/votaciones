<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterrController;
use App\Http\Controllers\EstadisticaController;
use App\Http\Controllers\LoginController;
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
///register
Route::get('/verRegister',[RegisterrController::class,'_invoke']);
Route::post('/userRegister',[RegisterrController::class,'register'])->name('userRegister.register');
Route::get('/chart',[EstadisticaController::class,'chart']);
//////login
Route::get('/verLogin',[LoginController::class,'verLogin']);
Route::post('/login',[LoginController::class,'login'])->name('login');
