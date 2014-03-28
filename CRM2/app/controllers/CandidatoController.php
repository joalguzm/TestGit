<?php

class CandidatoController extends BaseController {

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
	protected $candidatoRepo;
	
	public function __construct(CandidatoRepoInterface $candidato)
	{
		$this->candidatoRepo  = $candidato;
	}

	public function index()
	{
		//
	}
	public function show()
	{
		return $this->candidatoRepo->consultarTodos();
	}

	public function store()
	{
		return $this->candidatoRepo->crearCandidato(Input::get('usuario'), Input::get('descripcion'));
	}


	public function update($id)
	{
		return $this->candidatoRepo->editarCandidato($id,Input::get('usuario'), Input::get('descripcion'));
	}

	public function destroy($id)
	{
		return $this->candidatoRepo->eliminarCandidato($id);
	}
	
}