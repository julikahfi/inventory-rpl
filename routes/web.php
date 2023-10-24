<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SasprasController;
use App\Http\Controllers\karyawancontroller;
use App\Http\Controllers\barangcontroller;
use App\Http\Controllers\transaksicontroller;

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
    return view('index');
});

Route::get('/karyawan', [karyawancontroller::class,'karyawan']);
Route::get('/barang', [barangcontroller::class,'barang']);
Route::get('/transaksi', [transaksicontroller::class,'transaksi']);



Route::get('/saspras', [SasprasController::class,'index']);