<?php

use App\Http\Controllers\InfoPhpController;
use App\Http\Controllers\JenisPerkaraController;
use App\Http\Controllers\LaporanPerkaraController;
use App\Http\Controllers\PengacaraController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataUserController;
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
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware(['auth'])->group(function () {
    

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth','role:admin'])->group(function () {
Route::get('/user', [DataUserController::class, 'index'])->name('user.index');
Route::get('/user/tambah', [DataUserController::class, 'create'])->name('user.create');
Route::post('/user', [DataUserController::class, 'store'])->name('user.store');
});
Route::get('/info', [InfoPhpController::class, 'index']);
// Route::get('/dashboard1', function () {
//     return view('dashboard.index');
// })->name('dashboard');

Route::get('/dashboard1', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/jenisperkara', [JenisPerkaraController::class, 'index'])->name('jenisperkara');
Route::post('/jenisperkara', [JenisPerkaraController::class, 'store'])->name('jenisperkara.store');
Route::get('/jenisperkara/create', [JenisPerkaraController::class, 'create'])->name('jenisperkara.create');

Route::get('/laporanperkara', [LaporanPerkaraController::class, 'index'])->name('laporanperkara');
Route::post('/laporanperkara', [LaporanPerkaraController::class, 'store'])->name('laporanperkara.store');
Route::get('/laporanperkara/create', [LaporanPerkaraController::class, 'create'])->name('laporanperkara.create');
Route::get('/laporan/{id}/edit', [LaporanPerkaraController::class, 'edit'])->name('laporanperkara.edit');
Route::put('/laporan/{id}', [LaporanPerkaraController::class, 'update'])->name('laporanperkara.update');

Route::get('/pengacara/create', [PengacaraController::class, 'create'])->name('tambahpengacara');






require __DIR__ . '/modules.php';
});