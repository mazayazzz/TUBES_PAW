<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\DetailTiketController;

// Contoh route API untuk Film
Route::get('/films', [FilmController::class, 'index']);
Route::get('/films/{id}', [FilmController::class, 'show']);

// Contoh route API untuk Pemesanan
Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/pemesanan/{id}', [PemesananController::class, 'show']);
Route::post('/pemesanan', [PemesananController::class, 'store']);

// API lainnya bisa ditambahkan sesuai kebutuhan
