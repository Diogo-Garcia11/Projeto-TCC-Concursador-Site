<?php

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


