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
Route::get('login', function () { return view('login');});

Route::group(['prefix' => 'admin'],function(){
	Route::resource('usuarios','UsuariosController');
	Route::resource('categorias','CategoriasController');
	Route::resource('tarifas','TarifasController');
	Route::resource('comisiones','ComisionesController');
	
	Route::resource('aportesocios','AporteSociosController');
	Route::resource('aportes','AportesController');
	
	
	Route::get('usuarios/{id}/destroy',[
		'uses' => 'UsuariosController@destroy',
		'as'   => 'admin.usuarios.destroy'
	]);
	Route::get('aportes/{id}/destroy',[
		'uses' => 'AportesController@destroy',
		'as'   => 'admin.aportes.destroy'
	]);
	Route::get('categorias/{id}/destroy',[
		'uses' => 'CategoriasController@destroy',
		'as'   => 'admin.tiposocios.destroy'
	]);
	Route::get('tarifas/{id}/destroy',[
		'uses' => 'TarifasController@destroy',
		'as'   => 'admin.tarifas.destroy'
	]);

	Route::get('comisiones/{id}/destroy',[
		'uses' => 'ComisionesController@destroy',
		'as'   => 'admin.comisiones.destroy'
	]);

	Route::get('principal','PagesController@principal');
	Route::get('parametros','ParametrosController@principal');

});

Route::group(['prefix' => 'user'],function(){
	Route::resource('socios','SociosController');
	Route::resource('lecturas','LecturasController');
	Route::resource('cobros','CobrosController');
	
	Route::get('socios/{id}/destroy',[
		'uses' => 'SociosController@destroy',
		'as'   => 'user.socios.destroy'
	]);
});