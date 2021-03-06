<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('insertInfo', 'BookController@index');

Route::post('insertInfo', 'BookController@uploadBook');

Route::get('myBooks', 'BookController@showMyBooks');

Route::get('allBooks', 'BookController@showAllBooks');

Route::post('searchBook', 'BookController@searchBook');
