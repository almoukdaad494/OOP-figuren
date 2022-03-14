<?php 

require_once("Tweedim.class.php");

class cirkel extends Tweedim {
    public $lengte;

    public function __construct($lengte){
        parent::__construct($lengte);
    }
    

    var $maten=['lengte'];

    public function getMaatNamen(){
        return $this->maten;
    }



    public function Showomtrek(){
        return $this->lengte*3.14;
    }

    public function showOppervlakte(){
        return 3.14*$this->lengte/2*$this->lengte/2;
    }
    


}