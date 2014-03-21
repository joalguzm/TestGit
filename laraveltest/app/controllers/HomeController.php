<?php


class HomeController extends BaseController {

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


	public function editarPersona($id)
	{
		$persona = Persona::find($id);
		$persona->nombre = Input::get('nombre');
		$persona->apellido = Input::get('apellido');
		$persona->save();

		return $persona;
	}

	public function editar($id)
	{
		$persona = Persona::find($id);
		return View::make('crear')->withPersona($persona);
	}

	public function crear()
	{
		return View::make('crear');

	}

	public function consultarPersonas()
	{
		$personas=Persona::all();
		return $personas;
	}

	public function consultarMascotasPersona($id)
	{
		$persona=Persona::find($id);
		return $persona->mascotas;
	}

	public function eliminarPersona($id)
	{
		$persona=Persona::find($id);
		foreach ($persona->mascotas as $mascota) {
			Mascota::destroy($mascota->id);
		}
		Persona::destroy($id);
		echo "Registro Eliminado";

	}

	public function crearPersona()
	{
		$nombre = Input::get("nombre");
	 	$apellido = Input::get("apellido");
	    
	    $persona = new Persona;
	    $persona->nombre = $nombre;
	    $persona->apellido = $apellido;
	    $persona->save();

	    return $persona;
    }
}