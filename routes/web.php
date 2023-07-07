<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\User\BeritaController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PasangBaruController;
use App\Http\Controllers\User\PengaduanController as UserPengaduanController;
use App\Http\Controllers\User\TentangKamiController;

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
// route user
Route::get('/', [HomeController::class, 'index']);
Route::get('/tentangkami', [TentangKamiController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/detail-berita/{id}', [BeritaController::class, 'detail']);
Route::get('/pengaduan', [UserPengaduanController::class, 'index']);
Route::get('/pasang', [PasangBaruController::class, 'index']);



Route::get('/admin', function () {
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
