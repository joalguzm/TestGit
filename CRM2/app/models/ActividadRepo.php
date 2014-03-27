<?php

class ActividadRepo implements ActividadRepoInterface {

	public function consultarTodos()
	{
		return Actividad::All();
	}

	public function crearActividad($fecha_creacion,$titulo,$fecha,$comentarios,$recordatorio,$estado,$fecha_confirmacion,$tipo,$creador,$responsable,$candidato) {
		$actividad = new Actividad();
		$actividad->fecha_creacion=$fecha_creacion;
		$actividad->titulo=$titulo;
		$actividad->fecha=$fecha;
		$actividad->comentarios=$comentarios;
		$actividad->recordatorio=$recordatorio;
		$actividad->estado=$estado;
		$actividad->fecha_confirmacion=$fecha_confirmacion;
		$actividad->tipo=$tipo;
		$actividad->creador_usuario_id=$creador;
		$actividad->responsable_usuario_id=$responsable;
		$actividad->candidato_id=$candidato;
		
		$actividad->save();
	}

	public function eliminarActividad($id)
	{
		Actividad::destroy($id);
		
	}
	public function editarActividad($id,$fecha_creacion,$titulo,$fecha,$comentarios,$recordatorio,$estado,$fecha_confirmacion,$tipo,$creador,$responsable,$candidato) {
		$actividad = Actividad::find($id);
		$actividad->fecha_creacion=$fecha_creacion;
		$actividad->titulo=$titulo;
		$actividad->fecha=$fecha;
		$actividad->comentarios=$comentarios;
		$actividad->recordatorio=$recordatorio;
		$actividad->estado=$estado;
		$actividad->fecha_confirmacion=$fecha_confirmacion;
		$actividad->tipo=$tipo;
		$actividad->creador_usuario_id=$creador;
		$actividad->responsable_usuario_id=$responsable;
		$actividad->candidato_id=$candidato;
		$actividad->save();
	}
}
?>