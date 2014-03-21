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
Route::get('/login', 'LoginController@showLogin');
Route::get('/logout/{ticket}', 'LoginController@logout');
Route::get('/validarTicket', 'LoginController@validarTicket');
Route::get('/mostrarPersonas', 'HomeController@consultarPersonas');
Route::get('/crear/', 'HomeController@crear');
Route::post('/action', 'HomeController@crearPersona');
Route::post('/logear', 'LoginController@logear');
Route::put('/editarPersona/{id}', 'HomeController@editarPersona');
Route::get('/editar/{id}', 'HomeController@editar');
Route::delete('/eliminar/{id}', 'HomeController@eliminarPersona');
Route::get('/mascotasPersona/{id}', 'HomeController@consultarMascotasPersona');
Route::post('/mascotas/crear/', 'MascotaController@crearMascota');
Route::get('/mascotas', 'MascotaController@consultarMascotas');
Route::put('/mascotas/editar/{id}', 'MascotaController@editarMascota');
Route::delete('/mascotas/eliminar/{id}', 'MascotaController@eliminarMascota');