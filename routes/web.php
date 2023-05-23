<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RekapitulasiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\GrafikController;
use App\Http\Controllers\Registrasi\PasienController;
use App\Http\Controllers\Registrasi\PasienMasukController;
use App\Http\Controllers\Registrasi\PasienKeluarController;

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

Route::get('/', [LoginController::class,'index'])->name('login');
Route::post('/login', [LoginController::class,'login'])->name('login.action');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');

Route::group(['middleware' => ["Admin"]], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('registrasi')->group(function () {
        Route::get('/pasien', [PasienController::class, 'create'])->name('pasien.create');
        Route::post('/pasien', [PasienController::class, 'store'])->name('pasien.store');
        // Route::resource('/pasien-masuk', PasienMasukController::class);
        // Route::resource('/pasien-keluar', PasienKeluarController::class);
        Route::get('/pasien-masuk/{no_rm}', [PasienMasukController::class, 'create'])->name('pasien-masuk.create');
        Route::get('/pasien-masuk', [PasienMasukController::class, 'index'])->name('pasien-masuk.index');
        Route::post('/pasien-masuk', [PasienMasukController::class, 'store'])->name('pasien-masuk.store');

        Route::get('/pasien-keluar/{no_rm}', [PasienKeluarController::class, 'create'])->name('pasien-keluar.create');
        Route::get('/pasien-keluar', [PasienKeluarController::class, 'index'])->name('pasien-keluar.index');
        Route::post('/pasien-keluar', [PasienKeluarController::class, 'store'])->name('pasien-keluar.store');

    });
    Route::get('/rekapitulasi', [RekapitulasiController::class, 'index'])->name('rekapitulasi.index');
    Route::get('/history', [PasienController::class, 'history'])->name('history.index');

    Route::get('/laporan/kunjungan', [LaporanController::class, 'kunjungan'])->name('kunjungan.index');
    Route::get('/grafik-kunjungan', [GrafikController::class, 'kunjungan'])->name('grafik.kunjungan');
});