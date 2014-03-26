<?php 
interface CandidatoRepoInterface {

	public function consultarTodos();
	public function crearCandidato($usuario, $descripcion);
	public function eliminarCandidato($id);
	public function editarCandidato($id,$usuario,$descripcion);

}

?>