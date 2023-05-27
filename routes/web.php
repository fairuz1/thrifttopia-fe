<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

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

// Route::get('/posting-barang', function () {
//     return view('postingBarang');
// });

// Route::get('/autentikasi', function () {
//     return view('autentikasi');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/jualBarang', [DashboardController::class, 'jualBarang'])->name('jualBarang');

Route::group(['prefix' => 'auth'], function () {
	Route::get('/login', [LoginController::class, 'index']);
    Route::get('/register', [LoginController::class, 'index']);
});