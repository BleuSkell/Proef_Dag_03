<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UitslagController;
use App\Http\Controllers\ReserveringController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Uitslagen alleen voor ingelogden (indien van toepassing)
    Route::get('/admin/uitslagen', [UitslagController::class, 'index'])->name('uitslagen.index');
    // Overzicht reserveringen
    Route::get('/reservering', [ReserveringController::class, 'index'])->name('reserveringen.index');
    //  Reservering bewerken
    Route::get('/reservering/{id}/bewerken', [ReserveringController::class, 'edit'])->name('reserveringen.edit');
    Route::post('/reservering/{id}/wijzig', [ReserveringController::class, 'update'])->name('reserveringen.update');
});

require __DIR__.'/auth.php';
require __DIR__.'/reservation.php';
require __DIR__.'/klant.php';