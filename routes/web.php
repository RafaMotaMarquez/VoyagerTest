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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/contacts', function () {
    return view('contacts');
});

/*Testing display database*/
Route::resource('contacts/{id}', 'ContactsController');

/*Zombies*/
Route::any('/zombie', function () {
	echo "Any request from this zombie route";
});