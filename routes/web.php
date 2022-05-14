<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\FasilitasKamarController;
use App\Http\Controllers\FasilitasHotelController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\AuthController;

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


// Tamu
Route::get('/', [TamuController::class, 'home'])->middleware('guest:admin,resepsionis');
Route::get('/fasilitas', [TamuController::class, 'fasilitas'])->middleware('guest:admin,resepsionis');
Route::get('/kamar', [TamuController::class, 'kamar'])->middleware('guest:admin,resepsionis');

// Reservasi
Route::post('/reservasi/store', [ReservasiController::class, 'store']);

// Resepsionis
Route::get('/resepsionis', [ResepsionisController::class, 'dashboard'])->middleware('auth:resepsionis');
// fasilitas kamar
Route::get('/resepsionis/fasilitas-kamar', [ResepsionisController::class, 'fasilitas'])->middleware('auth:resepsionis');
// reservasi
Route::get('/resepsionis/reservasi', [ResepsionisController::class, 'reservasi'])->middleware('auth:resepsionis');
Route::get('/resepsionis/reservasi/{reservasi}', [ReservasiController::class, 'detail'])->middleware('auth:resepsionis');
Route::get('/resepsionis/reservasi/edit/{reservasi}', [ReservasiController::class, 'edit'])->middleware('auth:resepsionis');
Route::delete('/reservasi/destroy', [ReservasiController::class, 'destroy']);
Route::put('/reservasi/update/{reservasi}', [ReservasiController::class, 'update']);


// Admin
Route::get('/admin', [AdminController::class, 'dashboard'])->middleware('auth:admin');
// kamar
Route::get('/admin/kamar', [KamarController::class, 'kamar'])->middleware('auth:admin');
Route::get('/admin/kamar/tambah', [KamarController::class, 'tambah_kamar'])->middleware('auth:admin');
Route::get('/admin/kamar/edit/{kamar}', [KamarController::class, 'edit_kamar'])->middleware('auth:admin');
Route::post('/admin/kamar/store', [KamarController::class, 'store']);
Route::delete('/admin/kamar/destroy', [KamarController::class, 'destroy']);
Route::put('/admin/kamar/update/{kamar}', [KamarController::class, 'update']);
// fasilitas kamar
Route::get('/admin/fasilitas-kamar', [FasilitasKamarController::class, 'fasilitas'])->middleware('auth:admin');
Route::get('/admin/fasilitas-kamar/tambah', [FasilitasKamarController::class, 'tambah_fasilitas'])->middleware('auth:admin');
Route::get('/admin/fasilitas-kamar/edit/{fasilitas}', [FasilitasKamarController::class, 'edit_fasilitas'])->middleware('auth:admin');
Route::post('/admin/fasilitas-kamar/store', [FasilitasKamarController::class, 'store']);
Route::delete('/admin/fasilitas-kamar/destroy', [FasilitasKamarController::class, 'destroy']);
Route::put('/admin/fasilitas-kamar/update/{fasilitas}', [FasilitasKamarController::class, 'update']);
// fasilitas hotel
Route::get('/admin/fasilitas-hotel', [FasilitasHotelController::class, 'fasilitas'])->middleware('auth:admin');
Route::get('/admin/fasilitas-hotel/tambah', [FasilitasHotelController::class, 'tambah_fasilitas'])->middleware('auth:admin');
Route::get('/admin/fasilitas-hotel/edit/{fasilitas}', [FasilitasHotelController::class, 'edit_fasilitas'])->middleware('auth:admin');
Route::post('/admin/fasilitas-hotel/create', [FasilitasHotelController::class, 'create']);
Route::delete('/admin/fasilitas-hotel/destroy', [FasilitasHotelController::class, 'destroy']);
Route::put('/admin/fasilitas-hotel/update/{fasilitas}', [FasilitasHotelController::class, 'update']);


// Authentication
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest:admin,resepsionis');
Route::post('/login', [AuthController::class, 'auth']);
Route::post('/logout', [AuthController::class, 'logout']);
