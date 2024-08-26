<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/entrar', function () {
    return view('entrar');
})->name('entrar');

Route::get('/cadastrar', function () {
    return view('cadastrar');
})->name('cadastrar');

Route::get('/materias', function () {
    return view('materias');
})->name('materias');

Route::get('/simulados', function () {
    return view('simulados');
})->name('simulados');

Route::get('/comunidade', function () {
    return view('comunidade');
})->name('comunidade');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
