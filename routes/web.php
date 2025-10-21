<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PerguntaController;

Route::get('/', [PerguntaController::class, 'inicio'])
    ->name('inicio');
