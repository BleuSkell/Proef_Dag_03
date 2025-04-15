<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UitslagController;
use App\Http\Controllers\ReserveringController;

Route::middleware('auth')->group(function () {
    // Uitslagen index
    Route::get('/uitslagen', [UitslagController::class, 'index'])->name('uitslagen.index');

    // Overzicht reserveringen
    Route::get('/reservering', [ReserveringController::class, 'index'])->name('reserveringen.index');
    //  Reservering bewerken
    Route::get('/reservering/{id}/bewerken', [ReserveringController::class, 'edit'])->name('reserveringen.edit');
    Route::post('/reservering/{id}/wijzig', [ReserveringController::class, 'update'])->name('reserveringen.update');
});