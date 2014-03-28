<?php

class CandidatoRepo implements CandidatoRepoInterface {

	public function consultarTodos()
	{
		return Candidato::All();
	}

	public function crearCandidato($estado, $rating,$compania,$fecha_conversion,$contactado,$titulo,$naturaleza,$codigo,$nombre,$identificacion_tipo,$identificacion,$email1,$email2,$apellido,$iniciales,$nickname,$genero,$fecha_nacimiento,$departamento,$cargo,$fuente,$telefono,$telefono_extension,$telefono_movil,$telefono_otro,$direccion,$direccion_alternativa,$ultima_actividad,$pais,$ciudad,$url,$foto1,$adicional1,$adicional2,$descripcion,$comentarios,$entidad,$perfil,$activo,$anulado,$oportunidad,$cliente,$contacto,$creador,$modificador,$responsable,$reporta) {
		$candidato = new Candidato();
		$candidato->estado=$estado;
		$candidato->rating=$rating;
		$candidato->compania=$compania;
		$candidato->fecha_conversion=$fecha_conversion;
		$candidato->contactado=$contactado;
		$candidato->titulo=$titulo;
		$candidato->naturaleza=$naturaleza;
		$candidato->codigo=$codigo;
		$candidato->nombre=$nombre;
		$candidato->identificacion_tipo=$identificacion_tipo;
		$candidato->identificacion=$identificacion;
		$candidato->email1=$email1;
		$candidato->email2=$email2;
		$candidato->apellido=$apellido;
		$candidato->iniciales=$iniciales;
		$candidato->nickname=$nickname;
		$candidato->genero=$genero;
		$candidato->fecha_nacimiento=$fecha_nacimiento;
		$candidato->departamento=$departamento;
		$candidato->cargo=$cargo;
		$candidato->fuente=$fuente;
		$candidato->telefono=$telefono;
		$candidato->telefono_otro=$telefono_otro;
		$candidato->telefono_movil=$telefono_movil;
		$candidato->telefono_extension=$telefono_extension;
		$candidato->direccion=$direccion;
		$candidato->direccion_alternativa=$direccion_alternativa;
		$candidato->ultima_actividad=$ultima_actividad;
		$candidato->pais=$pais;
		$candidato->ciudad=$ciudad;
		$candidato->url=$url;
		$candidato->foto1=$foto1;
		$candidato->adicional1=$adicional1;
		$candidato->adicional2=$adicional2;
		$candidato->descripcion=$descripcion;
		$candidato->comentarios=$comentarios;
		$candidato->entidad=$entidad;
		$candidato->perfil=$perfil;
		$candidato->activo=$activo;
		$candidato->anulado=$anulado;
		$candidato->fecha_creacion=time();
		$candidato->oportunidad_id=$oportunidad;
		$candidato->cliente_id=$cliente;
		$candidato->contacto_id=$contacto;
		$candidato->responsable_usuario_id=$responsable;
		$candidato->creado_usuario_id=$creador;
		$candidato->modificador_usuario_id=$modificador;
		$candidato->reporta_candidato_id=$reporta;
		$candidato->save();
	}

	public function eliminarCandidato($id)
	{
		$candidato = Candidato::find($id);
		$candidato->estado_id = 2;
		$candidato->save();
	}
	public function editarCandidato($id,$estado, $rating,$compania,$fecha_convercion,$contactado,$titulo,$naturaleza,$codigo,$nombre,$identificacion_tipo,$identificacion,$email1,$email2,$apellido,$iniciales,$nickname,$genero,$fecha_nacimiento,$departamento,$cargo,$fuente,$telefono,$telefono_extension,$telefono_movil,$telefono_otro,$direccion,$direccion_alternativa,$ultima_actividad,$pais,$ciudad,$url,$foto1,$adicional1,$adicional2,$descripcion,$comentarios,$entidad,$perfil,$activo,$anulado,$oportunidad,$cliente,$contacto,$creador,$modificador,$responsable,$reporta) {
		$candidato = Candidato::find($id);
		$candidato->estado=$estado;
		$candidato->rating=$rating;
		$candidato->compania=$compania;
		$candidato->fecha_conversion=$fecha_convercion;
		$candidato->contactado=$contactado;
		$candidato->fecha_modificacion=time();
		$candidato->titulo=$titulo;
		$candidato->naturaleza=$naturaleza;
		$candidato->codigo=$codigo;
		$candidato->nombre=$nombre;
		$candidato->identificacion_tipo=$identificacion_tipo;
		$candidato->identificacion=$identificacion;
		$candidato->email1=$email1;
		$candidato->email2=$email2;
		$candidato->apellido=$apellido;
		$candidato->iniciales=$iniciales;
		$candidato->nickname=$nickname;
		$candidato->genero=$genero;
		$candidato->fecha_nacimiento=$fecha_nacimiento;
		$candidato->departamento=$departamento;
		$candidato->cargo=$cargo;
		$candidato->fuente=$fuente;
		$candidato->telefono=$telefono;
		$candidato->telefono_otro=$telefono_otro;
		$candidato->telefono_movil=$telefono_movil;
		$candidato->telefono_extension=$telefono_extension;
		$candidato->direccion=$direccion;
		$candidato->direccion_alternativa=$direccion_alternativa;
		$candidato->ultima_actividad=$ultima_actividad;
		$candidato->pais=$pais;
		$candidato->ciudad=$ciudad;
		$candidato->url=$url;
		$candidato->foto1=$foto1;
		$candidato->adicional1=$adicional1;
		$candidato->adicional2=$adicional2;
		$candidato->descripcion=$descripcion;
		$candidato->comentarios=$comentarios;
		$candidato->entidad=$entidad;
		$candidato->perfil=$perfil;
		$candidato->activo=$activo;
		$candidato->anulado=$anulado;
		$candidato->oportunidad_id=$oportunidad;
		$candidato->cliente_id=$cliente;
		$candidato->contacto_id=$contacto;
		$candidato->responsable_usuario_id=$responsable;
		$candidato->creado_usuario_id=$creador;
		$candidato->modificador_usuario_id=$modificador;
		$candidato->reporta_candidato_id=$reporta;
		$candidato->save();
	}
}
?>