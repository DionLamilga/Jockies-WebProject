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

Route::get('/login','App\Http\Controllers\ControllerGame@login');

Route::get('/daftar','App\Http\Controllers\ControllerGame@daftar');

Route::get('/contact','App\Http\Controllers\ControllerGame@contact');