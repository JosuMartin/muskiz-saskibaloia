<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartidoController;

Route::get('/', function () {
    return view('pagprincipal');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/tienda', function () {
    return view('tienda');
});

Route::get('/noticias', function () {
    return view('noticias');
});

Route::get('/partidos', [PartidoController::class, 'index'])->name('partidos.index');
