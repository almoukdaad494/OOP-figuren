<?php

require("Tweedim.class.php");

class vierkant extends Tweedim{


    public function __construct($lengte){
        parent::__construct($lengte);
    }
    

    var $maten=['lengte'];
    public function getMaatNamen(){
        return $this->maten;
    }


    public function Showomtrek(){
        return $this->lengte * 4 ;
    }

    
    public function showOppervlakte(){
        return $this->lengte * $this->lengte;
    }
}

