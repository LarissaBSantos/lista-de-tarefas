<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/home', function () {
    return view('pages.home');
})->middleware('auth');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
});

Route::post('/register', [AuthController::class, 'CriarConta']);
Route::post('/login', [AuthController::class, 'Autenticar']);
Route::post('/logout', [AuthController::class, 'EncerrarSessao'])->middleware('auth');