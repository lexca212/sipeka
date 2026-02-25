<?php

use App\Http\Controllers\InfoPhpController;
use App\Http\Controllers\JenisPerkaraController;
use App\Http\Controllers\LaporanPerkaraController;
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

Route::get('/jenisperkara', [JenisPerkaraController::class, 'index'])->name('jenisperkara');
Route::post('/jenisperkara', [JenisPerkaraController::class, 'store'])->name('jenisperkara.store');
Route::get('/jenisperkara/create', [JenisPerkaraController::class, 'create'])->name('jenisperkara.create');

Route::get('/laporanperkara', [LaporanPerkaraController::class, 'index'])->name('laporanperkara');
Route::get('/laporanperkara/create', [LaporanPerkaraController::class, 'create'])->name('laporanperkara.create');



require __DIR__ . '/modules.php';
