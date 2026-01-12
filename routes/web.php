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