<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

//AdminPanel
Route::resource('categories', KategoriController::class);
Route::resource('news', BeritaController::class);

//InfoMojokerto
Route::get('/', [InfoController::class, 'index'])->name('landing');
Route::get('per-kategori/{id}', [InfoController::class, 'perKategori'])->name('per-kategori');
Route::get('semua-berita', [InfoController::class, 'semuaBerita'])->name('semua-berita');
Route::get('detail-berita/{id}', [InfoController::class, 'detailBerita'])->name('detail-berita');