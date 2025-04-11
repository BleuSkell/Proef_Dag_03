<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/reserveringen', [ReservationController::class, 'index'])->name('reservations.index');
    Route::get('/reserveringen/edit/{id}', [ReservationController::class, 'edit'])->name('reservations.edit');
    Route::put('/reserveringen/update/{id}', [ReservationController::class, 'update'])->name('reservations.update');
});