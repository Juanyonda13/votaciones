<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterrController;
use App\Http\Controllers\EstadisticaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('verLogin');
});
///register
Route::get('/verRegister',[RegisterrController::class,'_invoke'])->name('verRegister');
Route::post('/userRegister',[RegisterrController::class,'register'])->name('userRegister.register');
Route::get('/chart',[EstadisticaController::class,'chart'])->middleware('auth')->name('chart.estadistica');
//////login
Route::get('/verLogin',[LoginController::class,'verLogin'])->name('verLogin');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/cerrarSesion',[LoginController::class,'logout'])->name('cerrarSesion');

//home
Route::get('/home',[EstadisticaController::class,'index'])->name('home');


//dashboard
Route::get('/verDahboard',[DashboardController::class,'verDashboard'])->name('verDahboard');
