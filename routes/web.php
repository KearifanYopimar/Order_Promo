<?php

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
    return view('welcome');
});

Route::get('login',[App\Http\Controllers\AuthController::class,'index'])
    ->name('auth.index')->middleware('guest');
Route::post('login',[App\Http\Controllers\AuthController::class,'verify'])
    ->name('auth.verify');

Route::get('login',[App\Http\Controllers\AuthController::class,'logout'])
    ->name('auth.logout');

Route::get('/admin',[App\Http\Controllers\DashboardController::class,'index'])
    ->name('dashboard.index');
Route::get('/admin/profile',[App\Http\Controllers\DashboardController::class,'profile'])
    ->name('dashboard.profile');