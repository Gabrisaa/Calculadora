<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/calcular', [App\Http\Controllers\controllerCalculo::class, 'Calcular'])->name('calcular');
