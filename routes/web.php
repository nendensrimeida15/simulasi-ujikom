<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UlasanBukuController;
>>>>>>> 7dcc9b9c646c5a679e692c7a284e5991f979ac36
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBukuController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\LoginController;

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
Route::get('/data-buku', [DataBukuController::class, 'index'])->name('data-buku');
Route::get('/create-data-buku', [DataBukuController::class, 'create'])->name('create-data-buku');
Route::post('/store-data-buku', [DataBukuController::class, 'store'])->name('store-data-buku');
Route::get('/edit-data-buku/{id}', [DataBukuController::class, 'edit'])->name('edit-data-buku');
Route::put('/update-data-buku/{id}', [DataBukuController::class, 'update'])->name('update-data-buku');
Route::get('/delete-data-buku/{id}', [DataBukuController::class, 'destroy'])->name('delete-data-buku');


// Route Peminjaman
Route::get('peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::get('create-peminjaman', [PeminjamanController::class, 'create'])->name('create-peminjaman');
Route::post('store-peminjaman', [PeminjamanController::class, 'store'])->name('store-peminjaman');
Route::get('edit-peminjaman/{id}', [PeminjamanController::class, 'edit'])->name('edit-peminjaman');
Route::put('update-peminjaman/{id}', [PeminjamanController::class, 'update'])->name('update-peminjaman');
Route::get('delete-peminjaman/{id}', [PeminjamanController::class, 'destroy'])->name('delete-peminjaman');

// Route Ulasan Buku
Route::get('/ulasan-buku', [UlasanBukuController::class, 'index'])->name('ulasan-buku');
Route::get('/create-ulasan-buku', [UlasanBukuController::class, 'create'])->name('create-ulasan-buku');
Route::post('/store-ulasan-buku', [UlasanBukuController::class, 'store'])->name('store-ulasan-buku');
Route::get('/edit-ulasan-buku/{id}', [UlasanBukuController::class, 'edit'])->name('edit-ulasan-buku');
Route::put('/update-ulasan-buku/{id}', [UlasanBukuController::class, 'update'])->name('update-ulasan-buku');
Route::get('/delete-ulasan-buku/{id}', [UlasanBukuController::class, 'destroy'])->name('delete-ulasan-buku');


// Route Pengguna
Route::get('/data-pengguna', [PenggunaController::class, 'index'])->name('data-pengguna');
Route::get('/create-pengguna', [PenggunaController::class, 'create'])->name('create-pengguna');
Route::post('/store-pengguna', [PenggunaController::class, 'store'])->name('store-pengguna');
Route::get('/edit-pengguna/{id}', [PenggunaController::class, 'edit'])->name('edit-pengguna');
Route::put('/update-pengguna/{id}', [PenggunaController::class, 'update'])->name('update-pengguna');
Route::get('/delete-pengguna/{id}', [PenggunaController::class, 'destroy'])->name('delete-pengguna');

// Route Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/post', [LoginController::class, 'login'])->name('post');

// Route::get('sesi', [SessionController::class, 'index']);
// Route::post('sesi/login', [SessionController::class, 'login']);
// Route::get('sesi/logout', [SessionController::class, 'logout']);
// Route::get('sesi/register', [SessionController::class, 'register']);
// Route::post('sesi/register', [SessionController::class, 'create']);