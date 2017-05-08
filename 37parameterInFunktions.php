<?php

function ausgeben($name) {
  $name = "Hans"; //verändere die variable innerhalb der function!
  echo $name;
}

$name ="max";
ausgeben($name);
var_dump($name); // die änderungen innerhalb einer Funktion werden nicht übernommen, die $name ändert sich also nicht!!!


$array = ["Max"];
//gleiches gilt für arrays!!
function arrayausgeben($array){
  $array[] = "Hans";
  var_dump($array);
}
arrayausgeben($array);
var_dump($array);

$array = ["Max"];
//übergebe nicht $array sondern mit "&" übergebe mir eine referenz!
// eine referenz ist keine Copy sowie das bei normalen Parametern gemacht wird,
// eine referenz verweist auf den tatsächlichen speicherort der variable;
function arrayRefAusgeben(&$array){
  $array[] = "Hans";
  var_dump($array);
}


arrayRefAusgeben($array);
var_dump($array);

 ?>
