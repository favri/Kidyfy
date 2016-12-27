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

// Route::get('/home/{id}' , 'HomeController@view');

Route::get('/medicos', 'MedicosController@view');
Route::get('/establecimientos', 'EstablecimientosController@view');
Route::get('/indumentaria', 'IndumentariaController@view');
Route::get('/colegios', 'ColegiosController@view');
Route::get('/colonias', 'ColoniasController@view');

Route::post('/colegios','ColegiosController@store');
Route::post('/medicos','MedicosController@store');
Route::post('/establecimientos','EstablecimientosController@store');
Route::post('/colonias','ColoniasController@store');
Route::post('/indumentaria','IndumentariaController@store');

Route::post('/home','PostsController@store');
Route::get('/posteo/{id}/editar','PostsController@editar');
Route::post('/posteo/{id}/borrar','PostsController@destroy');
Route::get('/posteo/{id}/{grupo}','PostsController@editarporgrupo');



Route::get('registro/{id}/editar','RegisterController@editar');
Route::match(['post', 'patch'],'registro/{id}','RegisterController@actualizar');
// Route::get('register/{id}/edit','Auth\RegisterController@edit');
// Route::patch('register/{id}','Auth\RegisterController@update');

Route::get('faq', 'FaqController@faqs');
Route::get('legal', 'LegalController@legals');

Route::get('/grupos', 'GrupoController@view');
Route::get('/doctores', 'DoctorController@view');



Route::get('/amistades', 'FriendshipController@getIndex');

Route::post('contact','ContactoController@store');

Route::get('contact','ContactoController@form');

Route::get('/usuario/{id}' , 'UserController@view');
