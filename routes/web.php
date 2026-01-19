<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/layanan', [App\Http\Controllers\LayananController::class, 'index']);
Route::get('/layanan/create', [App\Http\Controllers\LayananController::class, 'create']);
Route::post('/layanan/store', [App\Http\Controllers\LayananController::class, 'store'])->name('layanan.store');
Route::get('/layanan/edit/{id}', [App\Http\Controllers\LayananController::class, 'edit']);
Route::post('/layanan/update/{id}', [App\Http\Controllers\LayananController::class,'update']);
Route::get('/layanan/delete/{id}', [App\Http\Controllers\LayananController::class, 'destroy']);

Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index']);
Route::get('/transaksi/create', [App\Http\Controllers\TransaksiController::class, 'create']);
Route::post('/transaksi/store', [App\Http\Controllers\TransaksiController::class, 'store'])->name('transaksi.store');
Route::post('/transaksi/update/{id}',[App\Http\Controllers\TransaksiController::class,'update'])->name('transaksi.update');
Route::get('/transaksi/edit/{id}', [App\Http\Controllers\TransaksiController::class,'edit']);
Route::get('/transaksi/destroy/{id}',[App\Http\Controllers\TransaksiController::class, 'destroy']);
Route::get('/transaksi/bayar/{id}', [App\Http\Controllers\TransaksiController::class, 'bayar']);

Route::get('/transaksi/print/{id}', [App\Http\Controllers\TransaksiController::class, 'print']);