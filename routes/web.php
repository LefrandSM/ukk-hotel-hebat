<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\FasilitasKamarController;
use App\Http\Controllers\FasilitasHotelController;

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

// Admin
Route::get('/', [AdminController::class, 'dashboard']);
// kamar
Route::get('/admin/kamar', [KamarController::class, 'kamar']);
Route::get('/admin/kamar/tambah', [KamarController::class, 'tambah_kamar']);
Route::get('/admin/kamar/edit/{kamar}', [KamarController::class, 'edit_kamar']);
Route::post('/admin/kamar/store', [KamarController::class, 'store']);
Route::delete('/admin/kamar/destroy', [KamarController::class, 'destroy']);
Route::put('/admin/kamar/update/{kamar}', [KamarController::class, 'update']);
// fasilitas-kamar
Route::get('/admin/fasilitas-kamar', [FasilitasKamarController::class, 'fasilitas']);
Route::get('/admin/fasilitas-kamar/tambah', [FasilitasKamarController::class, 'tambah_fasilitas']);
Route::get('/admin/fasilitas-kamar/edit/{fasilitas}', [FasilitasKamarController::class, 'edit_fasilitas']);
Route::post('/admin/fasilitas-kamar/store', [FasilitasKamarController::class, 'store']);
Route::delete('/admin/fasilitas-kamar/destroy', [FasilitasKamarController::class, 'destroy']);
Route::put('/admin/fasilitas-kamar/update/{fasilitas}', [FasilitasKamarController::class, 'update']);
// fasilitas hotel
Route::get('/admin/fasilitas-hotel', [FasilitasHotelController::class, 'fasilitas']);
