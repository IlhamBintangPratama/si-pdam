<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\InformasiController;
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
    return view('dashboard');
});
//route pengaduan
Route::get('menu-admin/pengaduan', [PengaduanController::class, 'index']);
Route::get('search-items', [PengaduanController::class, 'index']);
//route pelanggan
Route::get('menu-admin/pelanggan', [PelangganController::class, 'index']);
Route::get('search-items', [PelangganController::class, 'index']);
//route informasi
Route::get('menu-admin/informasi', [InformasiController::class, 'index']);
Route::get('search-items', [InformasiController::class, 'index']);
//route tagihan
Route::get('menu-admin/tagihan', [TagihanController::class, 'index']);
Route::get('search-items', [TagihanController::class, 'index']);