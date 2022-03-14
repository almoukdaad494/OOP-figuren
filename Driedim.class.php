<?php 

require("Figuur.class.php");

class Driedim extends Figuur {

    public $hoogte;

    public function __construct($hoogte){
        $this->hoogte=$hoogte;
    }
}