<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoEnvioController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/infoenvio', [InfoEnvioController::class, 'infoenvio'])->name('infoenvio');

Route::get('/infocobro', [InfoEnvioController::class, 'infocobro'])->name('infocobro');

Route::get('/destinatario', [InfoEnvioController::class, 'destinatario'])->name('destinatario');

Route::get('/nosotros', [InfoEnvioController::class, 'nosotros'])->name('nosotros');
