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

Route::get('/services', function () {
    return view('services');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/orders', 'OrderController@index');
Route::post('/orders', 'OrderController@create');

Route::get('vosem.mil@gmail.com', 'Ajax\ContactController@send');