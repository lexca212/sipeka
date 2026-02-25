<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\PengacaraController;
use App\Http\Controllers\PerkaraController;
use Illuminate\Support\Facades\Route;

Route::resource('client', ClientController::class)->except(['show']);
Route::get('/pengacara', [PengacaraController::class, 'index'])->name('pengacara');
Route::resource('perkara', PerkaraController::class)->except(['show']);
