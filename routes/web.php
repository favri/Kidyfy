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
// Route::post('users/{id}', 'UsersController@update');
// Route::resource('users', 'UsersController');
// Route::post('users/{id}/images', 'UsersController@images');


Route::get('/', function () {
  if (Auth::guest()) {
    return view('welcome');
  }
  else {
    return Redirect::to('home');
  }

});


Auth::routes();

Route::get('registro/{id}/editar','RegisterController@editar');
// Route::get('register/{id}/edit','Auth\RegisterController@edit');
// Route::patch('register/{id}','Auth\RegisterController@update');


Route::get('/home', 'HomeController@index');
