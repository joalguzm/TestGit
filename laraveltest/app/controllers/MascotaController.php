<?php


class MascotaController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function editarMascota($id)
	{
		$mascota = Mascota::find($id);
		$mascota->nombre = Input::get('nombre');
		$mascota->save();

		return $mascota;
	}

	public function consultarMascotas()
	{
		$mascotas=Mascota::all();
		return $mascotas;
	}

	public function eliminarMascota($id)
	{
		Mascota::destroy($id);
	}

	public function crearMascota()
	{
		$nombre = Input::get("nombre");	 
		$duenio = Input::get("duenio");	       
	    $mascota = new Mascota;
	    $mascota->nombre = $nombre;
	    $mascota->persona_id = $duenio;
	    $mascota->save();

	    return $mascota;
    }
}