<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::middleware('auth')->group(function () {
    Route::get('/klanten', [PersonController::class, 'index'])->name('people.index');
    Route::get('/klanten/{id}', [PersonController::class, 'show'])->name('people.show');
    Route::get('/klanten/{id}/edit', [PersonController::class, 'edit'])->name('people.edit');
    Route::put('/klanten/{id}', [PersonController::class, 'update'])->name('people.update');
});
