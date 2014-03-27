<?php

class ActividadController extends BaseController {

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
	protected $actividadRepo;
	
	public function __construct(ActividadRepoInterface $actividad)
	{
		$this->actividadRepo  = $actividad;
	}

	public function crear()
	{
		return $this->actividadRepo->crearActividad(Input::get('usuario'), Input::get('descripcion'));
	}

	public function mostrar()
	{
		return $this->actividadRepo->consultarTodos();
	}


	public function editar($id)
	{
		return $this->actividadRepo->editarActividad($id,Input::get('usuario'), Input::get('descripcion'));
	}

	public function eliminar($id)
	{
		return $this->actividadRepo->eliminarActividad($id);
	}
	
}