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
Route::get('/posteo/{id}/editar','PostsController@editar');
Route::post('/posteo/{id}/borrar','PostsController@destroy');
Route::get('/posteo/{id}/{grupo}','PostsController@editarporgrupo');



Route::get('registro/{id}/editar','RegisterController@editar');
Route::match(['post', 'patch'],'registro/{id}','RegisterController@actualizar');
// Route::get('register/{id}/edit','Auth\RegisterController@edit');
// Route::patch('register/{id}','Auth\RegisterController@update');

Route::post('/colegios','ColegiosController@store');
Route::post('/medicos','MedicosController@store');
Route::post('/establecimientos','EstablecimientosController@store');
Route::post('/colonias','ColoniasController@store');
Route::post('/indumentaria','IndumentariaController@store');




Route::get('faq', 'FaqController@faqs');

Route::get('legal', 'LegalController@legals');

Route::get('/grupo/usuario/{id}', 'GrupoController@view');
Route::get('/doctores/usuario/{id}', 'DoctorController@view');

Route::get('medicos/usuario/{id}', 'MedicosController@view');
Route::get('establecimientos/usuario/{id}', 'EstablecimientosController@view');
Route::get('indumentaria/usuario/{id}', 'IndumentariaController@view');
Route::get('colegios/usuario/{id}', 'ColegiosController@view');
Route::get('colonias/usuario/{id}', 'ColoniasController@view');

Route::get('/amistades', 'FriendshipController@getIndex');

Route::post('contact','ContactoController@store');

Route::get('contact','ContactoController@form');

Route::get('/usuario/{id}' , 'UserController@view');
