<?php

use App\Http\Controllers\JenisController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\StokController;
use App\Models\Jenis;
use App\Models\Menu;
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
Route::resource('menu',MenuController::class);
Route::resource('jenis',JenisController::class);
Route::resource('stok',StokController::class);
Route::resource('member',MemberController::class);