<?php

class Car{
    //constructor
    public function __construct($ps){
      $this->ps = $ps;
    }
    //eigenschaft
    //veränderung damit kindsklasse auf $ps zugreifen kann
    //private $ps;
    protected $ps;

    //methode
    public function getPs(){
      return $this->ps;
    }

    //methode
    public function setPs($ps){
      $this->ps = $ps;
    }

    //methode
    public function drive(){
      var_dump("brum brum $this->ps");
    }
}


class SuperCar extends Car{

    // public function __construct($ps){
    //   //die zuweisung von $this->ps funktioniert nur wenn Car::$ps protected is und nicht private!!!
    //   $this->ps = $ps;
    // }

    //alternative wenn die $ps vom parent private ist!!!
    public function __construct($ps){
      parent::__construct($ps+500);
    }

    // Die parent:: ruft die methode aus der Super classe!!!;
    // public function drive(){
    //   parent::drive();
    // }

    //oder ich verändere die drive() methode in meiner kinderKlasse
    public function drive(){
      //hierfür muss $ps von private zu protected gemacht werden
      var_dump("SuperBrummSuperBrumm {$this->ps}");
    }

    //alternative kann die parent::methode aufgerufen werden damit muss die eigenschaft
    // nicht extra verändert werden!
    public function superDrive(){
      parent::drive();
    }

    public function fly(){
      var_dump("This Car is a SuperCar and can fly!!");
    }

}

//$wv is new instance of the Car class
$wv = new Car(200);
$swv = new SuperCar(300);
$swv->drive();




$wv->drive();

?>
