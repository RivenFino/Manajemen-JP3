<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\mapelController;
use App\Http\Controllers\riwayatController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');

    Route::prefix('guru')->name('guru.')->group(function () {
        Route::get('/', [GuruController::class, 'tampil'])->name('tampil');
        Route::get('/tambah', [GuruController::class, 'tambah'])->name('tambah');
        Route::post('/simpan', [GuruController::class, 'simpan'])->name('tambah.simpan');
        Route::get('/{nip}/ubah', [GuruController::class, 'ubah'])->name('ubah');
        Route::put('/simpan/{nip}', [GuruController::class, 'simpan_ubah'])->name('ubah.simpan');
        Route::get('/{nip}/hapus', [GuruController::class, 'hapus'])->name('hapus');
    });

    Route::prefix('mapel')->name('mapel.')->group(function () {
        Route::get('/', [mapelController::class, 'tampil'])->name('tampil');
        Route::get('/tambah', [mapelController::class, 'tambah'])->name('tambah');
        Route::post('/simpan', [mapelController::class, 'simpan'])->name('tambah.simpan');
        Route::get('/{mapel}/ubah', [mapelController::class, 'ubah'])->name('ubah');
        Route::put('/simpan/{mapel}', [mapelController::class, 'simpan_ubah'])->name('ubah.simpan');
        Route::get('/{mapel}/hapus', [mapelController::class, 'hapus'])->name('hapus');
    });

    Route::prefix('riwayat')->name('riwayat.')->group(function () {
        Route::get('/', [riwayatController::class, 'tampil'])->name('tampil');
        Route::get('/tambah', [riwayatController::class, 'tambah'])->name('tambah');
        Route::post('/simpan', [riwayatController::class, 'simpan'])->name('tambah.simpan');
        Route::get('/{id}/ubah', [riwayatController::class, 'ubah'])->name('ubah');
        Route::put('/simpan/{id}', [riwayatController::class, 'simpan_ubah'])->name('ubah.simpan');
        Route::get('/{id}/hapus', [riwayatController::class, 'hapus'])->name('hapus');
    });
    Route::prefix('riwayatgenap')->name('riwayatgenap.')->group(function () {
        Route::get('/', [riwayatController::class, 'tampilGenap'])->name('tampil');
        Route::get('/tambah', [riwayatController::class, 'tambahGenap'])->name('tambah');
        Route::post('/simpan', [riwayatController::class, 'simpanGenap'])->name('tambah.simpan');
        Route::get('/{id}/ubah', [riwayatController::class, 'ubahGenap'])->name('ubah');
        Route::put('/simpan/{id}', [riwayatController::class, 'simpan_ubahGenap'])->name('ubah.simpan');
        Route::get('/{id}/hapus', [riwayatController::class, 'hapusGenap'])->name('hapus');
    });
});
