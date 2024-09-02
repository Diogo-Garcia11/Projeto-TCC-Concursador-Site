<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimuladoController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/simulados', [SimuladoController::class], 'index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/materias', function () {
        return view('materias');
    })->name('materias');
    Route::get('/simulados', function () {
        return view('simulados');
    })->name('simulados');
    Route::get('/comunidade', function () {
        return view('comunidade');
    })->name('comunidade');
});

require __DIR__.'/auth.php';
