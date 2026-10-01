<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrosController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('registros', RegistrosController::class);
