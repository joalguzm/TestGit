<?php

class CuentaController extends BaseController {

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
	protected $cuentaRepo;
	
	public function __construct(CuentaRepoInterface $cuenta)
	{
		$this->cuentaRepo  = $cuenta;
	}

	public function store()
	{
		return $this->cuentaRepo->crearCuenta(Input::All());
	}

	public function index()
	{
		return $this->cuentaRepo->consultarTodos();
	}


	public function update($id)
	{
		return $this->cuentaRepo->editarCuenta($id,Input::get('nombre'), Input::get('descripcion'),Input::get('tipo'), Input::get('numero'));
	}

	public function destroy($id)
	{
		return $this->cuentaRepo->eliminarCuenta($id);
	}
	
	public function consultarTipos() {
		return $this->cuentaRepo->consultarTipos();
	}
}

