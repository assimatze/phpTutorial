<?php

// require "src/Car.php";
// require "src/SuperCar.php";

//require wird nicht benötigt stattdessen verwenden wir einen Autoloader!!!

spl_autoload_register(function ($className){
    var_dump($className);
    require "./src/{$className}.php";
    if(!file_exists("./src/{$className}.php")){
      echo "Die Datei ./src/{$className}.php befindet sich nicht unter";
      echo realpath(__DIR__);
    }
});


$vw = new SuperCar(300);
var_dump($vw->drive());

$bmw = new NCar(100);
var_dump($bmw->drive());



?>
