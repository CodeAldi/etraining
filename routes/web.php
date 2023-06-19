<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('landingPage.landingPage');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('/login','renderLoginPage')->name('login');
    Route::get('/register','renderregisterPage')->name('register');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/logout', 'logout')->name('logout');
    
});

Route::controller(DashboardController::class)->middleware(['auth'])->group(function(){
    Route::get('dashboard','index')->name('dashboard.index');
    
});
Route::controller(UserController::class)->group(function(){
    Route::post('registered','store')->name('register.simpan');
    
});
