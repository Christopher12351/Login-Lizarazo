<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\LoginController;

Route::controller(LoginController::class)->group( function() {
    Route::Get('grupo_votacion/{grupo_votacion}', 'grupo_votacion');

});
