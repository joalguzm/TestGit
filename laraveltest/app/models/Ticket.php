<?php

/*
 * To change this template use Tools | Templates.
 */
class Ticket extends Eloquent {

    protected $table = 'tickets';
    protected $primaryKey = 'ticket';
    public $timestamps = false;

    public function empleado()
    {
    	return $this->belongsTo("Empleado", "user");
    }
}

?>