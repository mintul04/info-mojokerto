<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::resource('categories', KategoriController::class);
Route::resource('news', BeritaController::class);

Route::get('/', [InfoController::class, 'index'])->name('landing');