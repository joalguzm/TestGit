<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::post('/api/candidatos/crear', 'CandidatoController@crear');
Route::get('/api/candidatos', 'CandidatoController@mostrar');
Route::delete('/api/candidatos/eliminar/{id}', 'CandidatoController@eliminar');
Route::put('/api/candidatos/editar/{id}', 'CandidatoController@editar');
Route::get('/',function(){
	return View::make('index');
});

Route::post('/api/cuentas/crear', 'CuentaController@crear');
Route::get('/api/cuentas', 'CuentaController@mostrar');
Route::delete('/api/cuentas/eliminar/{id}', 'CuentaController@eliminar');
Route::put('/api/cuentas/editar/{id}', 'CuentaController@editar');

Route::get('/api/cuentas/tipos', 'CuentaController@consultarTipos');

Route::post('/api/contactos/crear', 'ContactoController@crear');
Route::get('/api/contactos', 'ContactoController@mostrar');
Route::delete('/api/contactos/eliminar/{id}', 'ContactoController@eliminar');
Route::put('/api/contactos/editar/{id}', 'ContactoController@editar');