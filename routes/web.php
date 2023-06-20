<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\authAPI;
use App\Http\Middleware\Authenticate;

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
Route::middleware([authAPI::class])->group(function(){
    Auth::routes();
});

// Route::group(['middleware' => 'Authenticate'], function () {
//     Auth::routes();
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/jualBarang', [DashboardController::class, 'jualBarang'])->name('jualBarang');
Route::get('/home-admin', [AdminController::class, 'index'])->name('home-admin');
Route::get('/ringkasan', [AdminController::class, 'ringkasan'])->name('ringkasan');
Route::get('/pengguna', [AdminController::class, 'pengguna'])->name('pengguna');

// Route::group(['prefix' => 'auth'], function () {
// 	Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
//     Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
//     Route::get('/register', [App\Http\Controllers\Auth\LoginController::class, 'register']);
// });
