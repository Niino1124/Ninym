<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// SPLASH
Route::get('.', function () {
    return view('splash');
});

// DASHBOARD (setelah login)
//Route::get('/dashboard', [SeatController::class, 'dashboard'])
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');

// ROUTE LOGIN, REGISTER, FORGOT (dari Laravel Breeze)
//require __DIR__.'/auth.php';

// ROUTE SETELAH LOGIN
Route::get('/', function () {
    return view('landing');
});

Route::get('/reserve', function () {
    return view('reserve');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/userdashboard', function () {
    return view('userdashboard');
});

    //Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    //Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    //Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Route::get('/seats', [SeatController::class, 'index'])->name('seats.index');
    //Route::post('/seats/{id}/toggle', [SeatController::class, 'toggle'])->name('seats.toggle');

    //Route::post('/seat/update', [SeatController::class, 'update'])
    //->name('seat.update')
    //->middleware('auth');

    //Route::get('/seat/clear/{id}', [SeatController::class, 'clear'])
    //->middleware('auth');
