<?php

class CandidatoRepo implements CandidatoRepoInterface {

	public function consultarTodos()
	{
		return Candidato::where('estado_id', '=', 1)->get();
	}

	public function crearCandidato($postData) {
		$candidato = new Candidato();
		$candidato->fill($postData);
		$candidato->save();
	}

	public function eliminarCandidato($id)
	{
		$candidato = Candidato::find($id);
		$candidato->estado_id = 2;
		$candidato->save();
	}
	public function editarCandidato($id,$usuario, $descripcion)
	{
		$candidato = Candidato::find($id);
		$candidato->descripcion=$descripcion;
		$candidato->usuario=$usuario;
		$candidato->save();
	}
}
?>