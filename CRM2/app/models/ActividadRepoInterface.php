<?php 
interface ActividadRepoInterface {

	public function consultarTodos();
	public function crearActividad($titulo,$fecha,$comentarios,$recordatorio,$estado,$fecha_confirmacion,$tipo,$creador,$responsable,$candidato);
	public function eliminarActividad($id);
	public function editarActividad($id,$titulo,$fecha,$comentarios,$recordatorio,$estado,$fecha_confirmacion,$tipo,$creador,$responsable,$candidato);
}

?>