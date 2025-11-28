<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'beranda'])->name('beranda');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentang');
Route::get('/izin-usaha', [PageController::class, 'izinUsaha'])->name('izin.usaha');
Route::get('/pengalaman', [PageController::class, 'pengalaman'])->name('pengalaman');
Route::get('/struktur-organisasi', [PageController::class, 'strukturOrganisasi'])->name('struktur.organisasi');
Route::get('/proyek', [PageController::class, 'proyek'])->name('proyek');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');
