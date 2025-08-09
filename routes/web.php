<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomunitasController;
use App\Http\Controllers\KontribusiController;

// Redirect home ke halaman komunitas
Route::get('/', function () {
return redirect('/komunitas');
});

// =======================
// ROUTE: KOMUNITAS (Admin)
// =======================
Route::resource('komunitas', KomunitasController::class);
Route::get('/komunitas/{id}/edit', [KomunitasController::class, 'edit'])->name('komunitas.edit');
Route::put('/komunitas/{id}', [KomunitasController::class, 'update'])->name('komunitas.update');
Route::delete('/komunitas/{id}', [KomunitasController::class, 'hapus'])->name('komunitas.hapus');

// =======================
// ROUTE: KONTRIBUSI (Publik + Admin)
// =======================

// Form kontribusi (Publik)
Route::get('/kontribusi', [KontribusiController::class, 'create'])->name('kontribusi.create');
Route::post('/kontribusi', [KontribusiController::class, 'store'])->name('kontribusi.store');

// List kontribusi (Admin)
Route::get('/admin/kontribusi', [KontribusiController::class, 'index'])->name('kontribusi.index');

// Form Aspirasi (Publik)
Route::get('/aspirasi/create', [AspirasiController::class, 'create']);
Route::post('/aspirasi', [AspirasiController::class, 'store']);

// Admin
Route::get('/admin/aspirasi', [AspirasiController::class, 'index']);
