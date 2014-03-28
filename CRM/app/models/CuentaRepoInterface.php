<?php 
interface CuentaRepoInterface {

	public function consultarTodos();
	public function crearCuenta($postData);
	public function eliminarCuenta($id);
	public function editarCuenta($id,$nombre,$descripcion,$tipo,$numero);
	public function consultarTipos();
	
}

?>