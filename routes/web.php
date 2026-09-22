<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PotensiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;

Route::get('/', [BerandaController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/potensi-desa', [PotensiController::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);