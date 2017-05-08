<?php

$name = "Matthias";
echo strtolower($name); // ALle großbuchstaben werden zu kleinbuchstaben!

echo "</br>";
echo strtoupper($name); // Allle kleinbuchstaben werden zu großbuchstaben!

echo "</br>";
echo str_replace("M","w", $name); //ersetze einen String teil durch einen anderen auf dem String($name)

echo "</br>";
echo strpos($name, "M"); //strpos liefert int Zahl mit 0 als Anfang, und strpos liefert bool(false) falls der String nicht in var vorhanden

echo "</br>";
var_dump(strpos($name, "Max")); //strpos liefert int Zahl mit 0 als Anfang, und strpos liefert bool(false) falls der String nicht in var vorhanden

echo "</br>";
//VORSICHT VOR FEHLER!!!!
if(!empty(strpos($name, "M"))){
  //String wird nicht gefunden da strpos => 0 => EMpty(0) => true => !true => false
  echo "STring gefunden";
}else{
  echo "Nix gefunden!";
}

echo "</br>";
//Bessere alternative strpos($name) !== false;
if(strpos($name, "M") !== false){
  //String wird nicht gefunden da strpos => 0 => EMpty(0) => true => !true => false
  echo "Bessere alternative klappt";
}
 ?>
