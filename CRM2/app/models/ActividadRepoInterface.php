<?php 
interface ActividadRepoInterface {

	public function consultarTodos();
	public function crearActividad($fecha_creacion,$titulo,$fecha,$comentarios,$recordatorio,$estado,$fecha_confirmacion,$tipo,$creador,$responsable,$candidato);
	public function eliminarActividad($id);
	public function editarActividad($id,$fecha_creacion,$titulo,$fecha,$comentarios,$recordatorio,$estado,$fecha_confirmacion,$tipo,$creador,$responsable,$candidato);
}

?>