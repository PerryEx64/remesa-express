<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registro_cliente', function () {
    return view('registro_cliente');
});
Route::get('/referencias', function () {
    return view('referencias');
});
Route::get('/salario', function () {
    return view('salario');
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
