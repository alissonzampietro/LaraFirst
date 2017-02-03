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

Route::match(['get', 'post'], '/testando', function() {
	return "teste funcionando";
});

Route::get('/empresa', function () {
	return view('nova');
});


Route::get('/', function () {
    return view('welcome');
});