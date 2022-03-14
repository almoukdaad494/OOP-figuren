<?php

require("Driedim.class.php");

class bol extends Driedim{

    public $lengte;


    public function __construct($lengte,$hoogte){
        $this->lengte=$lengte;
        parent::__construct ($hoogte);
    }

    var $maten=['lengte','hoogte'];

    public function getMaatNamen(){
        return $this->maten;
    }


    public function showInhoud(){
        return  4/3*3.14*$this->lengte*$this->lengte*$this->lengte ;
    }

    public function showOppervlakte(){
        return 4*3.14*$this->lengte*$this->lengte  ;
    }


}
?>