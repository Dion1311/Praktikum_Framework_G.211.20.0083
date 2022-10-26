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
    return view('welcome');
});

Route::get('/Hello', function () {
    echo"<h1>halooo</h1>";
})->middleware('nama_mdw');

Route::get('/danger', function () {
    echo"<h1>Anda Tidak memiliki hak untuk akses</h1>";
});