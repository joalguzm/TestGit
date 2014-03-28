<?php

class CuentaRepo implements CuentaRepoInterface {

	public function consultarTodos()
	{
		return Cuenta::All();
	}

	public function crearCuenta($postData) {
		$cuenta = new Cuenta();
		$cuenta->fill($postData);	
		$cuenta->save();
	}

	public function eliminarCuenta($id)
	{
		Cuenta::destroy($id);
	}

	public function editarCuenta($id,$nombre,$descripcion,$tipo,$numero)
	{
		$cuenta = Cuenta::find($id);
		$cuenta->descripcion=$descripcion;
		$cuenta->nombre=$nombre;
		$cuenta->tipo=$tipo;
		$cuenta->numero=$numero;
		$cuenta->save();
	}

	public function consultarTipos() {
		return Tipo::All();
	}
}
?>