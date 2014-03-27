<?php 
interface CandidatoRepoInterface {

	public function consultarTodos();
	public function crearCandidato($estado, $rating,$compania,$fecha_conversion,$contactado,$fecha_modificacion,$titulo,$naturaleza,$codigo,$nombre,$identificacion_tipo,$identificacion,$email1,$email2,$apellido,$iniciales,$nickname,$genero,$fecha_nacimiento,$departamento,$cargo,$fuente,$telefono,$telefono_extension,$telefono_movil,$telefono_otro,$direccion,$direccion_alternativa,$ultima_actividad,$pais,$ciudad,$url,$foto1,$adicional1,$adicional2,$descripcion,$comentarios,$entidad,$perfil,$activo,$anulado,$fecha_creacion,$oportunidad,$cliente,$contacto,$creador,$modificador,$responsable,$reporta);
	public function eliminarCandidato($id);
	public function editarCandidato($id,$estado, $rating,$compania,$fecha_conversion,$contactado,$fecha_modificacion,$titulo,$naturaleza,$codigo,$nombre,$identificacion_tipo,$identificacion,$email1,$email2,$apellido,$iniciales,$nickname,$genero,$fecha_nacimiento,$departamento,$cargo,$fuente,$telefono,$telefono_extension,$telefono_movil,$telefono_otro,$direccion,$direccion_alternativa,$ultima_actividad,$pais,$ciudad,$url,$foto1,$adicional1,$adicional2,$descripcion,$comentarios,$entidad,$perfil,$activo,$anulado,$fecha_creacion,$oportunidad,$cliente,$contacto,$creador,$modificador,$responsable,$reporta);

}

?>