<?php

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
Route::get('/about-diamonds', function () {
    return view('about-diamonds');
});

Route::get('/color', function () {
    return view('diamonds-color');
});

Route::get('/certificate-security', function () {
    return view('certificate-security');
});

Route::get('/sustainability', function () {
    return view('sustainability');
});

