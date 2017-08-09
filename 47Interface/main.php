<?php

// require "src/Car.php";
// require "src/SuperCar.php";

//require wird nicht benötigt stattdessen verwenden wir einen Autoloader!!!
//-------------------------------------------------------------------------
// Version 2 vom Autoloader mit "anonymer Function"
spl_autoload_register(function ($className){
    //var_dump($className);
    //bindedie Datei ein Falls sie existiert
    if(file_exists("./src/{$className}.php")){
      require "./src/{$className}.php";
    }
});
//Typisierter Functions Aufruf
// mit Car geht sowohl Car als SuperCar
function drive($car){
    return $car->drive();
}


// mit SuperCar geht Nur SuperCar NICHT Car
// function drive(SuperCar $car){
//     return $car->drive();
// }

$yyy = new Bicycle();
$xxx = new Car(150);
$vw = new SuperCar(300);
var_dump(drive($vw));

//aufruf der drive() methode wirft fatal Error
//da $xxx vom Typ Car ist und nicht vom Typ Supercar
var_dump(drive($yyy));




?>
