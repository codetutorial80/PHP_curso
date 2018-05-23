<?php

namespace Disney\Classes;

class Donald {

    private $myTime;
	
    public function __construct() {
	//empty constructor
    }

    public function injectTime($time) {
	   
	    $this->mytime = $time;
    }

    public function mostrarHorario() {
	    return "{$this->mytime->getDay()}-{$this->mytime->getMonth()}-{$this->mytime->getYear()}" . " es mi horario";
    }
}
