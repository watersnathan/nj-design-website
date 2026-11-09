<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// 1. Main Website Pages
Route::view('/', 'home')->name('home');
Route::view('/services', 'services')->name('services');
Route::view('/about', 'about')->name('about');

// 2. Contact Page (Just displaying the view now)
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// 3. Dashboard (Default Breeze route)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// 4. Profile Routes (Default Breeze routes)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [\App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

// 5. Authentication Routes
require __DIR__.'/auth.php';