<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\PenjualanController;

// Rute utama
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Rute untuk Data Pengguna
Route::get('/level', [LevelController::class, 'index'])->name('level');
Route::get('/user', [UserController::class, 'index'])->name('user');

// Rute untuk Data Barang
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/barang', [BarangController::class, 'index'])->name('barang');

// Rute untuk Data Transaksi
Route::get('/stok', [StokController::class, 'index'])->name('stok');
Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan');
