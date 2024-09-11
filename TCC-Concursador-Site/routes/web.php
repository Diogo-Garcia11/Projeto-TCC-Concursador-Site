<?php

use App\Http\Controllers\NotaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestaoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimuladoController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
    
});

Route::get('/dashboard', [NotaController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



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
    
    Route::prefix('simulados')->group(function () {
        Route::get('/enem', [SimuladoController::class, 'enem'])->name('simulados.enem');
        Route::get('/fatec', [SimuladoController::class, 'fatec'])->name('simulados.fatec');
        Route::get('/fuvest', [SimuladoController::class, 'fuvest'])->name('simulados.fuvest');

        Route::post('/submit', [SimuladoController::class, 'submit'])->name('simulados.submit');
        
    });
    
    Route::get('/comunidade', function () {
        return view('comunidade');
    })->name('comunidade');

    Route::get('/downloadapp', function () {
        return view('downloadapp');
    })->name('downloadapp');
    
    Route::get('/calendario', function () {
        return view('calendario');
    })->name('calendario');

    Route::get('/uploads', function () {
        return view('uploads'); // Aponta para a view do formulário de upload
    })->name('uploads');
    
    Route::post('/extrair-questoes', [QuestaoController::class, 'extrairQuestoes'])->name('extrairQuestoes');
    Route::post('/uploadImagem', [QuestaoController::class, 'uploadImagem'])->name('uploadImagem');
    
});

require __DIR__.'/auth.php';

    