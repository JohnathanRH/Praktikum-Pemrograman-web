<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
    Route::get('dashboard', [BukuController::class, 'index'])->name('dashboard');
    Route::get('bukus/create', [BukuController::class, 'create'])->name('bukus.create');
    Route::post('bukus', [BukuController::class, 'store'])->name('bukus.store');
    Route::get('bukus/{buku}/edit', [BukuController::class, 'edit'])->name('bukus.edit');
    Route::put('bukus/{buku}', [BukuController::class, 'update'])->name('bukus.update');
    Route::delete('bukus/{buku}', [BukuController::class, 'destroy'])->name('bukus.destroy');
});

Route::get('login', [LoginController::class, 'show'])->name('login.show');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.auth');
Route::post('logout', [LoginController::class, 'logout'])->name('login.logout');