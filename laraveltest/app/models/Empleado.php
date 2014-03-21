<?php

/*
 * To change this template use Tools | Templates.
 */
class Empleado extends Eloquent {

    protected $table = 'empleado';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function ticket()
    {
    	return $this->hasOne('Ticket', 'user');
    }
}

?>