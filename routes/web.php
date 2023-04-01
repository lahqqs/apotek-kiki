<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;

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

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login/authentication', [AuthController::class, 'authenticate'])->name('login.authentication');
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('registrasi', [AuthController::class, 'register'])->name('register');
    Route::post('registrasi/authentication', [AuthController::class, 'registrasi'])->name('register.authentication');
});

    Route::get('user', [userController::class, 'index'])->name('user.index');
    Route::get('obat', [ObatController::class, 'index'])->name('obat.index');
    Route::get('distributor', [DistributorController::class, 'index'])->name('distributor.index');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('pembelian', [PembelianController::class, 'index'])->name('pembelian.index');
    Route::get('penjualan', [PenjualanController::class, 'index'])->name('penjualan.index');

    Route::get('createObat', [ObatController::class, 'addObat'])->name('obat.create');
    Route::post('createObat', [ObatController::class, 'create'])->name('tambahObat');

    Route::delete('deleteObat/{obat}', [ObatController::class, 'delete'])->name('deleteObat');
    
    Route::get('updateObat/{obat}', [ObatController::class, 'updateObat'])->name('updateObat');
    Route::put('updateObat/{obat}', [ObatController::class, 'update'])->name('editObat');
