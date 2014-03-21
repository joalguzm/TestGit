<?php

/*
 * To change this template use Tools | Templates.
 */
class Mascota extends Eloquent {

    protected $table = 'mascotas';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function persona()
    {
    	return $this->belongsTo("Persona","persona_id");
    }

}

?>