<?php

require_once("Tweedim.class.php");


class rechthoek extends Tweedim{

    public $breedte;
    
    public function __construct($lengte,$breedte){  
        $this->breedte=$breedte;
        parent::__construct($lengte);
    }

    
    var $maten=['lengte','breedte'];

    public function getMaatNamen(){
        return $this->maten;
    }



    public function showOppervlakte(){
        return $this->lengte * $this->breedte;
    }

    public function Showomtrek(){
       return  $this->lengte*2 + $this->breedte*2;
    }

}
    
?>
