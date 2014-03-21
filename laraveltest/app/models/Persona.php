<?php

/*
 * To change this template use Tools | Templates.
 */
class Persona extends Eloquent {

    protected $table = 'persona';
    protected $primaryKey = 'id';
	public $timestamps = false;
    public function mascotas()
    {
    	return $this->hasMany("Mascota","persona_id");
    }
}

?>