<?php

use App\Http\Controllers\InfoPhpController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PengacaraController;
use App\Http\Controllers\PerkaraController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', [InfoPhpController::class, 'index']);
Route::get('/dashboard1', function () {
    return view('dashboard.index');
})->name('dashboard');
Route::resource('client', ClientController::class)->except(['show']);
Route::get('/pengacara',[PengacaraController::class, 'index'])->name('pengacara');
Route::resource('perkara', PerkaraController::class)->except(['show']);
