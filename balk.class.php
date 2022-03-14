<?php

require("Driedim.class.php");

class balk extends Driedim{

    public $lengte;
    public $breedte;
    
    public function __construct($lengte, $breedte, $hoogte){
        $this->lengte=$lengte;
        $this->breedte=$breedte;
        parent::__construct ($hoogte);
    }



    var $maten=['lengte','breedte','hoogte'];

    public function getMaatNamen(){
        return $this->maten; // array
    }

    
    public function showInhoud(){
        return $this->lengte * $this->breedte * $this->hoogte;
    }

    public function showOppervlakte(){
        return 2*$this->lengte*$this->breedte + 2*$this->breedte*$this->hoogte + 2*$this->lengte*$this->hoogte;
    }

    
}

