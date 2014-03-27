<?php

/*
 * To change this template use Tools | Templates.
 */
class Contacto extends Eloquent {

	protected $table = 'contacto';
	protected $primaryKey = 'id';
	public $timestamps = false;  

	public function cuenta()
	{
		return $this->hasOne('Cuenta', 'cuenta_id');
	}
}
?>