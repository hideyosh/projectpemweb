<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BasicUserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LaporanController;


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
})->name('welcome');

Route::get('/products', function () {
    return view('products');
})->name('products');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('user', UserController::class);
Route::resource('product', ProductController::class);
Route::resource('basicuser', BasicUserController::class);
Route::resource('order', OrderController::class);
Route::resource('transaksi', transaksiController::class);
// Route::resource('laporan', LaporanController::class);
Route::get('/laporan',[LaporanController::class, 'index'])->name('laporan.index');
Route::get('/laporan/show/{laporan}',[LaporanController::class, 'show'])->name('laporan.show');
Route::delete('/laporan/destroy/{laporan}',[LaporanController::class, 'destroy'])->name('laporan.destroy');
Route::get('/laporan/exportpdf',[LaporanController::class, 'exportpdf'])->name('laporan.exportpdf');
Route::get('/laporan/exportexcel',[LaporanController::class, 'exportexcel'])->name('laporan.exportexcel');
