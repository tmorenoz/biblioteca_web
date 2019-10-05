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

/*Route::get('/', function () {
   return view('welcome');
});*/

Route::resource('', 'HomeController');
Route::resource('nosotros', 'NosotrosController');
Route::resource('recursos', 'ResourceController');
Route::resource('novedades', 'NovedadController');
Route::resource('servicios', 'ServiceController');
Route::resource('actividades', 'ActivityController');
Route::resource('base-de-datos', 'BaseController');
Route::resource('normativa', 'NormativaController');
Route::resource('biblioteca-en-un-minuto', 'BibliotecaController');
Route::resource('boletines', 'BoletinController');

Route::post('suscripcion', 'HomeController@suscripcion');
Route::get('novedades/{id}/{slug}', 'NovedadController@show');
Route::get('biblioteca-en-un-minuto/{id}/{slug}', 'BibliotecaController@show');
Route::get('boletines/{id}/{slug}', 'BoletinController@show');
Route::get('actividades/{id}/{slug}', 'ActivityController@show');
Route::get('normativa/{id}/{slug}', 'NormativaController@show');

Route::get('buscador', 'SearchController@buscar');
Route::post('buscador/recurso', 'SearchController@show');
Route::post('buscador/paises', 'SearchController@paises');

Route::get('recurso/{id}', 'SearchController@recurso');

Route::get('biblioteca-en-un-minuto-f/{anio}/{mes}', 'BibliotecaController@filtro');
Route::get('boletines-f/{anio}/{mes}', 'BoletinController@filtro');

// Email related routes
Route::post('buscador/send', 'SearchController@enviarEmail');

//Ajax calendario
Route::get('cargar-fechas', 'ActivityController@fecha');
Route::get('cargar-actividades', 'ActivityController@cargar');


//Ajax cargar mas bases de datos
Route::get('cargar-mas-bases', 'BaseController@cargar');



Route::group(['prefix' => 'admin'], function () {
   Voyager::routes();
});
//Exportar datos de suscriptores
Route::post('exportsuscriptor', 'SuscriptorController@exportSuscriptor');
