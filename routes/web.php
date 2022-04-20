<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KamarController;

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
Route::get('/admin/kamar', [KamarController::class, 'kamar']);
Route::get('/admin/kamar/tambah', [KamarController::class, 'tambah_kamar']);
Route::get('/admin/kamar/edit/{kamar}', [KamarController::class, 'edit_kamar']);
Route::post('/admin/kamar/store', [KamarController::class, 'store']);
Route::post('/admin/kamar/destroy', [KamarController::class, 'destroy']);
