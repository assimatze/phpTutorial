<?php

// require "src/Car.php";
// require "src/SuperCar.php";

//require wird nicht benötigt stattdessen verwenden wir einen Autoloader!!!

//Version 1 Autoloader mit benannter function autoload()
function autoload($className){
  //var_dump($className);
  //bindedie Datei ein Falls sie existiert
  if(file_exists("./src/{$className}.php")){
    require "./src/{$className}.php";
  }else{
    // Falls die Datei {$className} nicht existiert
    echo "Die Datei ./src/{$className}.php befindet sich nicht unter ";
    echo realpath(__DIR__);
  }
}
//die Methode "spl_autoload_register"
//benötigt als parameter den Namen der Funktion als
//String in diesem BSP "autoload":
spl_autoload_register("autoload");

//-------------------------------------------------------------------------
// Version 2 vom Autoloader mit "anonymer Function"
spl_autoload_register(function ($className){
    //var_dump($className);
    //bindedie Datei ein Falls sie existiert
    if(file_exists("./src/{$className}.php")){
      require "./src/{$className}.php";
    }else{
      // Falls die Datei {$className} nicht existiert
      echo "Die Datei ./src/{$className}.php befindet sich nicht unter ";
      echo realpath(__DIR__);
    }
});


$vw = new SuperCar(300);
var_dump($vw->drive());

$bmw = new NCar(100);
var_dump($bmw->drive());



?>
