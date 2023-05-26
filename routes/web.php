<?php

use App\Http\Controllers\ControllerBuku;
use App\Http\Controllers\Kategori;
use App\Http\Controllers\Penerbit;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//penerbit
Route::get('/penerbit', [Penerbit::class, 'index']);
Route::get('/tambahpenerbit', [Penerbit::class, 'create']);
Route::post('/storepenerbit', [Penerbit::class, 'store']);
Route::get('/editpenerbit/{update}', [Penerbit::class, 'update']);
Route::put('/savepenerbit/{update}', [Penerbit::class, 'save']);
Route::delete('/deletepenerbit/{delete}', [Penerbit::class, 'delete']);

//kategori
Route::get('/kategori', [Kategori::class, 'index']);
Route::get('/tambahkategori', [Kategori::class, 'create']);
Route::post('/storekategori', [Kategori::class, 'store']);
Route::get('/editkategori/{update}', [Kategori::class, 'update']);
Route::put('/savekategori/{update}', [Kategori::class, 'save']);
Route::delete('/deletekategori/{delete}', [Kategori::class, 'delete']);

//buku
Route::get('/buku', [ControllerBuku::class, 'index']);
Route::get('/tambahbuku', [ControllerBuku::class, 'create']);
Route::post('/storeBuku', [ControllerBuku::class, 'store']);
Route::get('/editBuku/{editBuku}', [ControllerBuku::class, 'edit']);
Route::put('/updateBuku/{updateBuku}', [ControllerBuku::class, 'update']);
Route::delete('/deleteBuku/{deleteBuku}', [ControllerBuku::class, 'delete']);