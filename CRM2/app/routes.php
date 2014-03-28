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
Route::resource('api/candidatos', 'CandidatoController');
Route::any('/candidatos/{path?}',function(){
	return View::make('index');
});

/*Route::get('/api/candidatos', 'CandidatoController@mostrar');
Route::delete('/api/candidatos/eliminar/{id}', 'CandidatoController@eliminar');
Route::put('/api/candidatos/editar/{id}', 'CandidatoController@editar');



Route::post('/api/actividades/crear', 'ActividadController@crear');
Route::get('/api/actividades', 'ActividadController@mostrar');
Route::delete('/api/actividades/eliminar/{id}', 'ActividadController@eliminar');
Route::put('/api/actividades/editar/{id}', 'ActividadController@editar');

*/