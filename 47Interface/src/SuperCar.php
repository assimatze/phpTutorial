<?php
class SuperCar extends Car{

    //alternative wenn die $ps vom parent private ist!!!
    // public function __construct($ps){
    //   parent::__construct($ps+500);
    // }

    public function drive(){
      return "SuperBrummSuperBrumm {$this->ps}";
    }

    public function fly(){
      return "This Car is a SuperCar and can fly!!";
    }

}
