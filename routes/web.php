<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/anasayfa', function () {
    return view('index');
})->name('anasayfa');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/hakkimizda', function () {
    return view('hakkimizda');
})->name('hakkimizda');

require __DIR__.'/auth.php';
