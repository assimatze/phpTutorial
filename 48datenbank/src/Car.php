<?php

class Car implements DriveInterface{
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
      return "brum brum $this->ps";
    }
}
