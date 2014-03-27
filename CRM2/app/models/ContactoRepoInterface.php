<?php 
interface ContactoRepoInterface {

	public function consultarTodos();
	public function crearContacto($nombre, $apellido,$mail,$telefono,$cuenta);
	public function eliminarContacto($id);
	public function editarContacto($id,$nombre,$apellido,$mail,$telefono,$cuenta);

}

?>