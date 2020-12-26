<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/home','App\Http\Controllers\ControllerGame@home');

Route::get('/contact','App\Http\Controllers\ControllerGame@contact');

Route::get('/ml','App\Http\Controllers\ControllerGame@ml');

Route::post('/daftar',[App\Http\Controllers\customAuth\RegisterController::class,'store'])->name('registerPengguna');
//login
Route::get('/login',[\App\Http\Controllers\customAuth\LoginController::class,'view']);
    
Route::post('/login',[App\Http\Controllers\customAuth\loginController::class,'cek'])->name('loginCustomAuth');
//register
Route::get('/daftar',[App\Http\Controllers\customAuth\RegisterController::class,'view']);

Route::get('/logout',[App\Http\Controllers\customAuth\LoginController::class,'logout']);

Route::get('/admin/adduser',[App\Http\Controllers\AdminPage\AdminController::class,'adduser'])->middleware('MiddlewareCek');

Route::get('/admin/tbluser',[App\Http\Controllers\AdminPage\AdminController::class,'tbluser'])->middleware('MiddlewareCek');

Route::post('/trans',[App\Http\Controllers\TransaksiController::class,'store'])->name('transaksiPengguna');

Route::get('/trans',[App\Http\Controllers\TransaksiController::class,'view']);