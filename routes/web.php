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
    return view('template_default_bureaux/bureaux');
});

Route::get('/bureau', function () {
    return view('template_default_bureaux/bureaux');
});

Route::get('/menu_bar', function () {
    return view('menu_bar');
});
