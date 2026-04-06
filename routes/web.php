<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeatController;
use Illuminate\Support\Facades\Route;

// SPLASH
Route::get('/', function () {
    return view('splash');
});

// DASHBOARD (setelah login)
Route::get('/dashboard', [SeatController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// ROUTE LOGIN, REGISTER, FORGOT (dari Laravel Breeze)
require __DIR__.'/auth.php';

// ROUTE SETELAH LOGIN
Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/seats', [SeatController::class, 'index'])->name('seats.index');
    Route::post('/seats/{id}/toggle', [SeatController::class, 'toggle'])->name('seats.toggle');

});