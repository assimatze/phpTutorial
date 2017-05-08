<?php

class Car{

    //constructor
    public function __construct($ps){
      $this->ps = $ps;
    }

    //eigenschaft
    private $ps;

    public function getPs(){
      return $this->ps;
    }


    public function setPs($ps){
      $this->ps = $ps;
    }

    public function drive(){
      var_dump("brum brum $this->ps");
    }
}

//$wv is new instance of the Car class
$wv = new Car(200);

$wv->setPs(100);
//setzte die eigenschaft des Car
$wv->drive();

?>
