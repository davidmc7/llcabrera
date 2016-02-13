<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () { return view('login');});
Route::get('login', 'PagesController@login');

Route::group(['prefix' => 'admin'],function(){
	Route::resource('aportesocios','AporteSociosController');
	Route::resource('aportes','AportesController');
	Route::resource('parametros','ParametrosController');
	Route::resource('tarifas','TarifasController');
	Route::resource('tiposocios','TipoSociosController');
	Route::resource('users','UsersController');

});

Route::group(['prefix' => 'user'],function(){
	Route::resource('cobros','CobrosController');
	Route::resource('lecturas','LecturasController');
	Route::resource('socios','SociosController');

});

/*
Route::get('bienvenida', 'PagesController@bienvenida');
Route::get('socio', 'PagesController@socio');
Route::get('lecturar', 'PagesController@lecturar');
Route::get('cobrar', 'PagesController@cobrar');
Route::get('informes', 'PagesController@informes');
Route::get('admin', 'PagesController@admin');
Route::get('parametros', 'PagesController@parametros');

*/