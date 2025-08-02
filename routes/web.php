<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomunitasController;

// Redirect home ke halaman komunitas
Route::get('/', function () {
    return redirect('/komunitas');
});

// Resource route untuk CRUD komunitas
Route::resource('komunitas', KomunitasController::class);
