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
    return view('home');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/kurikulum', function () {
    return view('kurikulum');
});
Route::get('/kontakkami', function () {
    return view('kontakkami');
});




Route::get('/navbar', function () {
    return view('template.navbar');
});
Route::get('/struktur', function () {
    return view('struktur');
});
Route::get('/footer', function () {
    return view('template.footer');
});
Route::get('/carousel', function () {
    return view('template.carousel');
});
