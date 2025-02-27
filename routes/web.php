<?php

use App\Http\Controllers\Permission\PermissionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckJsonResultsController;
use Spatie\Health\Http\Controllers\SimpleHealthCheckController;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->get('health', HealthCheckJsonResultsController::class);

Route::get('/dashboard', function () {
    return view('home/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// PermessioController.php
Route::middleware('auth')->group(function () {
    Route::get('/permission', [PermissionController::class, 'permission'])->name('permission.create');
    Route::post('/permission', [PermissionController::class, 'store'])->name('permission.store');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
