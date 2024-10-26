<?php

use App\Http\Controllers\InfoEnvioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/metodopago', [InfoEnvioController::class, 'metodopago'])->name('metodopago');
Route::get('/pago', [InfoEnvioController::class, 'pago'])->name('pago');

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

Route::get('/registro_cliente', function () {
    return view('registro_cliente');
})->name('registro_cliente');

Route::get('/referencias', function () {
    return view('referencias');
})->name('referencias');

Route::get('/salario', function () {
    return view('salario');
})->name('salario');
