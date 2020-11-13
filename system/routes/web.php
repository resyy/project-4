<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriController;

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
    return view('admin.beranda');
});

// Halaman Admin
Route::get('admin/beranda', [HomeController::class, 'showBeranda']);
Route::get('admin/kategori', [HomeController::class, 'showKategori']);
Route::get('login', [AuthController::class, 'showLogin']);
Route::get('registrasi', [AuthController::class, 'registrasi']);

// Halaman Admin Produk
Route::get('admin/produk', [ProdukController::class, 'index']);
Route::get('admin/produk/create', [ProdukController::class, 'create']);
Route::post('admin/produk', [ProdukController::class, 'store']);
Route::get('admin/produk/detail/{produk}', [ProdukController::class, 'show']);
Route::get('admin/produk/edit/{produk}', [ProdukController::class, 'edit']);
Route::put('admin/produk/{produk}', [ProdukController::class, 'update']);

// Halaman Admin Kategori
Route::get('admin/kategori', [KategoriController::class, 'index']);
Route::get('admin/kategori/create', [KategoriController::class, 'create']);
Route::post('admin/kategori', [KategoriController::class, 'store']);
Route::get('admin/kategori/detail/{kategori}', [KategoriController::class, 'show']);
Route::get('admin/kategori/edit/{kategori}', [KategoriController::class, 'edit']);
Route::put('admin/kategori/{kategori}', [KategoriController::class, 'update']);