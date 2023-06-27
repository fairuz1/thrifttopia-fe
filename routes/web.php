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
// Route::middleware([authAPI::class])->group(function(){

// });

Auth::routes();

Route::group([authAPI::class], function () {
    Route::get('/jualBarang', [DashboardController::class, 'jualBarang'])->name('jualBarang');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin-dashboard');
Route::get('/admin/ringkasan', [AdminController::class, 'ringkasan'])->name('ringkasan');
Route::get('/admin/pengguna', [AdminController::class, 'pengguna'])->name('pengguna');

Route::get('/admin/dashboard/getData', [AdminController::class, 'getDataUser'])->name('getUserPost');
