<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomunitasController;

// Redirect home ke halaman komunitas
Route::get('/', function () {
    return redirect('/komunitas');
});

// Resource route untuk CRUD komunitas
Route::resource('komunitas', KomunitasController::class);
Route::get('/komunitas/{id}/edit', [KomunitasController::class, 'edit'])->name('komunitas.edit');
Route::put('/komunitas/{id}', [KomunitasController::class, 'update'])->name('komunitas.update');
Route::delete('/komunitas/{id}', [KomunitasController::class, 'hapus'])->name('komunitas.hapus');
