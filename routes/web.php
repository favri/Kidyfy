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

Route::get('/home', 'HomeController@index');

Route::get('/home/{id}' , 'HomeController@view');

Route::post('/home','PostsController@store');

Route::get('registro/{id}/editar','RegisterController@editar');
Route::match(['post', 'patch'],'registro/{id}','RegisterController@actualizar');
// Route::get('register/{id}/edit','Auth\RegisterController@edit');
// Route::patch('register/{id}','Auth\RegisterController@update');

Route::post('/colegios/{id}','ColegiosController@store');
Route::post('/medicos/{id}','MedicosController@store');
Route::post('/establecimientos/{id}','EstablecimientosController@store');
Route::post('/colonias/{id}','ColoniasController@store');
Route::post('/indumentaria/{id}','IndumentariaController@store');




Route::get('faq', 'FaqController@faqs');

Route::get('legal', 'LegalController@legals');

Route::get('/grupo/{id}', 'GrupoController@view');

Route::get('/doctores/{id}', 'DoctorController@view');

Route::get('medicos/{id}', 'MedicosController@view');

Route::get('establecimientos/{id}', 'EstablecimientosController@view');

Route::get('indumentaria/{id}', 'IndumentariaController@view');

Route::get('colegios/{id}', 'ColegiosController@view');

Route::get('colonias/{id}', 'ColoniasController@view');

Route::get('/amistades', 'FriendshipController@getIndex');

Route::post('contact','ContactoController@store');

Route::get('contact','ContactoController@form');

Route::get('/{id}' , 'UserController@view');
