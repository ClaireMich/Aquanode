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
    return view('welcome');
});

Route::post('createUser', 'AdminController@createUser');

Route::get('comments', 'AdminController@comments');

Route::get('anyData', 'AdminController@anyData');

Route::get('pdf', 'AdminController@pdf');