<?php

class ContactoController extends BaseController {

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
	protected $contactoRepo;
	
	public function __construct(ContactoRepoInterface $contacto)
	{
		$this->contactoRepo  = $contacto;
	}

	public function crear()
	{
		return $this->contactoRepo->crearContacto(Input::get('nombre'), Input::get('apellido'),Input::get('mail'),Input::get('telefono'),Input::get('cuenta'));
	}

	public function mostrar()
	{
		return $this->contactoRepo->consultarTodos();
	}


	public function editar($id)
	{
		return $this->contactoRepo->editarContacto($id,Input::get('nombre'), Input::get('apellido'),Input::get('mail'),Input::get('telefono'),Input::get('cuenta'));
	}

	public function eliminar($id)
	{
		return $this->contactoRepo->eliminarContacto($id);
	}
	
}