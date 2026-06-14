<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PengalamanController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('home', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    Route::get('my/profile', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
    Route::get('my/pengalaman/{pengalaman}', [PengalamanController::class, 'show'])->name('pengalaman.show');
});


require __DIR__.'/auth.php';
