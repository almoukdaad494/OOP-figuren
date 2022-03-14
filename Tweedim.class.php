<?php

require_once("Figuur.class.php");

class Tweedim extends Figuur{

    public $lengte;

    public function __construct($lengte){
        $this->lengte=$lengte;
    }
}
