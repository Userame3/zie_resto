<?php

use App\Http\Controllers\JenisController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\QuantityController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;
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
    return view('template.layout');
});

Route::get('tentang', function () {
    return view('tentang.index');
});

Route::resource('menu', MenuController::class);
Route::resource('jenis', JenisController::class);
Route::resource('stok', StokController::class);
Route::resource('member', MemberController::class);
Route::resource('quantity', QuantityController::class);
Route::get('/login', function () {
    return view('auth.login');
});
Route::resource('transaksi', TransaksiController::class);
Route::get('login', [UserController::class, 'index'])->name('login');
