<?php 
interface CandidatoRepoInterface {

	public function consultarTodos();
	public function crearCandidato($postData);
	public function eliminarCandidato($id);
	public function editarCandidato($id,$usuario,$descripcion);

}

?>