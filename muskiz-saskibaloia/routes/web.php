<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartidoController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

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

Route::get('/contacto', function () {
    return view('contacto');
});

Route::post('/contacto', function (Request $request) {
    $detalles = $request->all();

    Mail::raw($detalles['message'], function ($message) use ($detalles) {
        $message->to('muskizsaskibaloiaberria@gmail.com')
                ->subject('Nuevo mensaje de: ' . $detalles['name'] . ' - ' . $detalles['subject'])
                ->from($detalles['email'], $detalles['name']);
    });

    return back()->with('success', '¡Mensaje enviado correctamente!');
})->name('contacto.send');

Route::get('/partidos', [PartidoController::class, 'index'])->name('partidos.index');
