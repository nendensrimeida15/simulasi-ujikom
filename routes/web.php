<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenggunaController;
<<<<<<< HEAD
use App\Http\Controllers\RegistarController;


=======
use App\Http\Controllers\LoginController;
>>>>>>> 05ca72caf3eacdaf840128d3f0631d4c89d0b21f

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


// Route Buku
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/data-buku', [BukuController::class, 'index'])->name('data-buku');
Route::get('/create', [BukuController::class, 'create'])->name('create');
Route::post('/store', [BukuController::class, 'store'])->name('store');
Route::get('edit/{id}', [BukuController::class, 'edit'])->name('edit');
Route::put('update/{id}', [BukuController::class, 'update'])->name('update');
Route::get('delete/{id}', [BukuController::class, 'destroy'])->name('delete');

// Route Peminjaman
Route::get('peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::get('create-peminjaman', [PeminjamanController::class, 'create'])->name('create-peminjaman');

// Route Pengguna
Route::get('/data-pengguna', [PenggunaController::class, 'index'])->name('data-pengguna');
Route::get('/create-pengguna', [PenggunaController::class, 'create'])->name('create-pengguna');
Route::post('/store-pengguna', [PenggunaController::class, 'store'])->name('store-pengguna');
Route::get('/delete-pengguna/{id}', [PenggunaController::class, 'destroy'])->name('delete-pengguna');

<<<<<<< HEAD
Route::get('/registar', [RegistarController::class, 'index'])->name('registar');
=======
// Route Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/post', [LoginController::class, 'login'])->name('post');

// Route::get('sesi', [SessionController::class, 'index']);
// Route::post('sesi/login', [SessionController::class, 'login']);
// Route::get('sesi/logout', [SessionController::class, 'logout']);
// Route::get('sesi/register', [SessionController::class, 'register']);
// Route::post('sesi/register', [SessionController::class, 'create']);
>>>>>>> 05ca72caf3eacdaf840128d3f0631d4c89d0b21f
