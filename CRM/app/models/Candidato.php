<?php

/*
 * To change this template use Tools | Templates.
 */
class Candidato extends Eloquent {

	protected $table = 'candidato';
	protected $primaryKey = 'id';
	public $timestamps = false;  

	public function estado()
	{
		return $this->hasOne('Estado', 'estado_id');
	}
}
?>