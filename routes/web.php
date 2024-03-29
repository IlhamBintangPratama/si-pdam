<?php

use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\BroadcastController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PelangganController;
// use App\Http\Controllers\PasangbaruController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PasangbaruController as ControllersPasangbaru;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\User\BeritaController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\PasangBaruController;
use App\Http\Controllers\User\PengaduanController as UserPengaduanController;
use App\Http\Controllers\User\PengajuanController;
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

// auth login
Route::get('/login', [SessionController::class, 'index']);
Route::post('/session/login', [SessionController::class, 'login']);
Route::get('/session/logout', [SessionController::class, 'logout']);
// route user
Route::get('/', [HomeController::class, 'index']);
Route::post('/cek-tagihan', [HomeController::class, 'cek_tagihan']);
Route::get('/tentangkami', [TentangKamiController::class, 'index']);
Route::get('berita', [BeritaController::class, 'index']);
Route::get('/detail-berita/{id}', [BeritaController::class, 'detail']);
Route::get('pengaduan', [UserPengaduanController::class, 'index']);
Route::post('cek-pengaduan', [UserPengaduanController::class, 'cek']);
Route::get('cek-pengaduan/{id}', [UserPengaduanController::class, 'getPengaduan'])->name('cek-pengaduan');
Route::post('send-pengaduan', [UserPengaduanController::class, 'store']);
Route::get('/pasang', [PasangBaruController::class, 'index']);
Route::get('/pengajuan', [PengajuanController::class, 'index']);
Route::post('send-pengajuan', [PengajuanController::class, 'store']);



Route::group(['middleware' => 'isLogin', 'web'], function () {
    Route::resource('dashboard', DashboardController::class)->only('index');
    //route pengaduan
    Route::get('menu-admin/pengaduan', [PengaduanController::class, 'index']);
    Route::get('menu-admin/pengaduan/create', [PengaduanController::class, 'create']);
    Route::post('menu-admin/pengaduan', [PengaduanController::class, 'store']);
    Route::get('menu-admin/pengaduan/{id}/edit', [PengaduanController::class, 'edit']);
    Route::post('menu-admin/pengaduan/{id}/update', [PengaduanController::class, 'update']);
    Route::get('menu-admin/pengaduan/{id}/show', [PengaduanController::class, 'show']);
    Route::get('menu-admin/pengaduan/{id}/print', [PengaduanController::class, 'print']);
    Route::get('menu-admin/pengaduan/{id}/pesan', [PengaduanController::class, 'pesan']);
    Route::post('menu-admin/pengaduan/{id}/resWhatsapp', [PengaduanController::class, 'resWhatsapp']);
    Route::post('menu-admin/pengaduan/{id}/delete', [PengaduanController::class, 'destroy']);
    Route::get('search-pengaduan', [PengaduanController::class, 'index']);
    Route::get('search-date', [PengaduanController::class, 'index']);
    Route::get('search-baru', [PengaduanController::class, 'index']);
    Route::get('search-selesai', [PengaduanController::class, 'index']);
    //route pelanggan
    Route::get('menu-admin/pelanggan', [PelangganController::class, 'index']);
    Route::get('menu-admin/pelanggan/create', [PelangganController::class, 'create']);
    Route::post('menu-admin/pelanggan', [PelangganController::class, 'store']);
    Route::get('menu-admin/pelanggan/{id}/edit', [PelangganController::class, 'edit']);
    Route::post('menu-admin/pelanggan/{id}/update', [PelangganController::class, 'update']);
    Route::get('menu-admin/pelanggan/{id}/show', [PelangganController::class, 'show']);
    Route::post('menu-admin/pelanggan/{id}/delete', [PelangganController::class, 'destroy']);
    //route informasi
    Route::get('menu-admin/informasi', [InformasiController::class, 'index']);
    Route::get('menu-admin/informasi/create', [InformasiController::class, 'create']);
    Route::post('menu-admin/informasi', [InformasiController::class, 'store']);
    Route::get('menu-admin/informasi/{id}/edit', [InformasiController::class, 'edit']);
    Route::post('menu-admin/informasi/{id}/update', [InformasiController::class, 'update']);
    Route::get('menu-admin/informasi/{id}/show', [InformasiController::class, 'show']);
    Route::post('menu-admin/informasi/{id}/delete', [InformasiController::class, 'destroy']);
    Route::get('search-informasi', [InformasiController::class, 'index']);
    //route tagihan
    Route::get('menu-admin/tagihan', [TagihanController::class, 'index']);
    Route::get('menu-admin/tagihan/create', [TagihanController::class, 'create']);
    Route::post('menu-admin/tagihan', [TagihanController::class, 'store']);
    Route::get('menu-admin/tagihan/{id}/edit', [TagihanController::class, 'edit']);
    Route::post('menu-admin/tagihan/{id}/update', [TagihanController::class, 'update']);
    Route::get('menu-admin/tagihan/{id}/show', [TagihanController::class, 'show']);
    Route::post('menu-admin/tagihan/{id}/delete', [TagihanController::class, 'destroy']);
    Route::get('menu-admin/tagihan/listdata/{id}', [TagihanController::class, 'listdata']);
    Route::get('search-tagihan', [TagihanController::class, 'index']);

    Route::get('menu-admin/laporan', [PengaduanController::class, 'laporan'])->name('rekap.report');

    Route::get('menu-admin/pasangbaru/{id}/edit', [ControllersPasangbaru::class, 'edit']);
    Route::post('menu-admin/pasangbaru/{id}/update', [ControllersPasangbaru::class, 'update']);

    Route::get('menu-admin/profil', [ProfilController::class, 'index']);
    Route::get('menu-admin/profil/{id}/edit', [ProfilController::class, 'edit']);
    Route::post('menu-admin/profil/{id}/update', [ProfilController::class, 'update']);

    Route::get('menu-admin/broadcast/pesan', [BroadcastController::class, 'pesan']);
    Route::post('menu-admin/broadcast/broadcastWhatsapp', [BroadcastController::class, 'broadcastWhatsapp']);
});

Route::get('menu-admin/cetak-laporan/{id}/{start_date}/{end_date}', [PengaduanController::class, 'laporan_pdf'])
    ->name('cetak-laporan-pengaduan');
