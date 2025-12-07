<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\DetailTiketController;

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->middleware('guest')
    ->name('login.post');

Route::get('/register', [AuthController::class, 'showRegisterForm'])
    ->name('register.form');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register');

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// CRUD lengkap
Route::resource('film', FilmController::class);
Route::resource('pelanggan', PelangganController::class);
Route::resource('jadwal', JadwalController::class);
Route::resource('studio', StudioController::class);
Route::resource('pemesanan', PemesananController::class);
Route::resource('pembayaran', PembayaranController::class);
Route::resource('detail-tiket', DetailTiketController::class);

// Tambahan rute khusus (jika diperlukan)
Route::get('/film/{id_film}/jadwal', [JadwalController::class, 'indexPerFilm'])
    ->name('jadwal.perfilm');

Route::view('/pembayaran-sukses', 'pembayaran.sukses')
    ->name('pembayaran.sukses');
