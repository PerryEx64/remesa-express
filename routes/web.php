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
