<?php
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
