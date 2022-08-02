<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterrController;
use App\Http\Controllers\EstadisticaController;
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
Route::get('/verRegister',[RegisterrController::class,'_invoke']);
Route::post('/userRegister',[RegisterrController::class,'register'])->name('userRegister.register');
Route::get('/chart',[EstadisticaController::class,'chart']);
