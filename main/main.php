<?php

require "src/Car.php";
require "src/SuperCar.php";

$vw = new SuperCar(300);
var_dump($vw->drive());

$bmw = new Car(100);
var_dump($bmw->drive());



?>
