<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\TambahBukuController;
use App\Http\Controllers\KoleksiBukuController;
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

// Route::get('/koleksi-buku', function () {
//       return view('koleksi-buku');
//  });
// Route::get('/koleksi-buku', [KoleksiBukuController::class]);
// Route::get('/tambah-buku', [MenuController::class, 'admin']);

Route::resource('/tambah-buku', TambahBukuController::class);
Route::resource('/koleksi-buku', KoleksiBukuController::class);