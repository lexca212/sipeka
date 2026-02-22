<?php

use App\Http\Controllers\InfoPhpController;
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

require __DIR__ . '/modules.php';
