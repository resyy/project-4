<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('template', function(){
	return view('template.base');
});

Route::get('admin/beranda', [HomeController::class, 'showBeranda']);
Route::get('admin/kategori', [HomeController::class, 'showKategori']);
Route::get('admin/login', [HomeController::class, 'login']);
Route::get('admin/registrasi', [HomeController::class, 'registrasi']);

Route::get('admin/produk/', [ProdukController::class, 'index']);
Route::get('admin/produk/create', [ProdukController::class, 'create']);




Route::get('user/', function(){
	return view('user.index');
});

Route::get('user/kategori', function(){
	return view('user.kategori');
});

Route::get('user/produk', function(){
	return view('user.produk');
});

Route::get('user/login', function(){
	return view('user.login');
});

Route::get('user/registrasi', function(){
	return view('user.registrasi');
});