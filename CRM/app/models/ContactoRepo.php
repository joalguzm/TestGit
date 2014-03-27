<?php

class ContactoRepo implements ContactoRepoInterface {

	public function consultarTodos()
	{
		return Contacto::All();
	}

	public function crearContacto($nombre, $apellido,$mail,$telefono,$cuenta) {
		$contacto = new Contacto();
		$contacto->nombre=$nombre;
		$contacto->apellido=$apellido;
		$contacto->cuenta_id = $cuenta;
		$contacto->mail=$mail;
		$contacto->telefono =$telefono;
		$contacto->save();
	}

	public function eliminarContacto($id)
	{
		Contacto::destroy($id);
		
	}
	public function editarContacto($id,$nombre, $apellido,$mail,$telefono,$cuenta)
	{
		$contacto = Contacto::find($id);
		$contacto->nombre=$nombre;
		$contacto->apellido=$apellido;
		$contacto->cuenta_id = $cuenta;
		$contacto->mail=$mail;
		$contacto->telefono =$telefono;
		$contacto->save();
	}
}
?>