<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/pets', [PetController::class, 'index'])
        ->name('pets.index');

    Route::get('/pets/create', [PetController::class, 'create'])
        ->name('pets.create');

    Route::post('/pets', [PetController::class, 'store'])
        ->name('pets.store');

    Route::get('/appointments', [AppointmentController::class, 'index'])
        ->name('appointments.index');

    Route::get('/appointments/create', [AppointmentController::class, 'create'])
        ->name('appointments.create');

    Route::post('/appointments', [AppointmentController::class, 'store'])
        ->name('appointments.store');
});

require __DIR__.'/auth.php';
