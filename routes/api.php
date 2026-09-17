<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\LoginController;

Route::controller(LoginController::class)->group( function() {

    Route::get('/login', 'login');
    Route::post('/login', 'iniciarSesion');

    Route::get('/login/registrar', 'registrar');
    Route::post('/login/registrar', 'guardar');

    Route::get('/login/recuperar', 'recuperar');
    Route::post('/login/recuperar', 'enviarCodigo');

    Route::get('/login/validar', 'validar');
    Route::post('/login/validar', 'validarCodigo');

    Route::get('/login/passwordd', 'passwordd');
    Route::post('/login/passwordd', 'actualizarPasswordd');

});
