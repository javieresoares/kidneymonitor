<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\CekGinjalController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserDataController;

// Route untuk Register
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'showForm')->name('register');
    Route::post('/register', 'register');
});

// Route untuk login
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'logout')->name('logout');
});

// Group route yang membutuhkan autentikasi
Route::middleware('auth')->group(function () {
    // Route untuk homepage
    Route::view('/', 'homepage')->name('homepage');

    // Route untuk panduan kesehatan
    Route::prefix('panduan')->name('panduan.')->controller(PanduanController::class)->group(function () {
        Route::get('/', 'index')->name('index'); // Halaman utama Panduan Kesehatan
        Route::get('/aktivitas-fisik', 'aktivitasFisik')->name('aktivitas_fisik'); // Aktivitas Fisik
        Route::get('/pola-makan-sehat', 'polaMakanSehat')->name('pola_makan_sehat'); // Pola Makan Sehat
        Route::get('/berat-badan', 'beratBadan')->name('berat_badan'); // Manajemen Berat Badan
        Route::get('/manajemen-stress', 'manajemenStress')->name('manajemen_stress'); // Manajemen Stress
    });

    // Route untuk cek ginjal
    Route::prefix('cek-ginjal')->name('cek-ginjal.')->controller(CekGinjalController::class)->group(function () {
        Route::get('/', 'index')->name('index'); // Halaman utama cek ginjal
        Route::post('/store', 'store')->name('store'); // Simpan data cek ginjal
        Route::get('/hasil/{id}', 'hasilCek')->name('hasil-cek'); // Hasil cek ginjal
    });


    // Route untuk Riwayat Data
    Route::prefix('riwayat')->name('riwayat.')->group(function () {
        Route::get('/', [UserDataController::class, 'index'])->name('index'); // Menampilkan riwayat data
        Route::post('/save', [UserDataController::class, 'saveData'])->name('save'); // Simpan data riwayat
        Route::post('/edit', [UserDataController::class, 'editData'])->name('edit'); // Edit data riwayat
        Route::post('/delete', [UserDataController::class, 'deleteData'])->name('delete'); // Hapus data riwayat
    });
});
