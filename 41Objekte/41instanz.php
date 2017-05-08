<?php

class Car{
    //eigenschaft
    public $ps;

    public function drive(){
      var_dump("brum brum $this->ps");
    }
}

//$wv is new instance of the Car class
$wv = new Car();
//setzte die eigenschaft des Car
$wv->ps = 100;
$wv->drive();

?>
