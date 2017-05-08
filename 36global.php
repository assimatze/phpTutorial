<?php

$name = "Max";

//geht nicht da funktion ausgabe nicht auf $name zugreifen kann!!
function ausgabe(){
  // es wird eine <Notice: Undefined variable: name in C:\xampp\htdocs\phpTutorial\global.php on line 7> geworfen.
  echo $name;
}

// 1. alternative: so geht das weil man die variable übergibt
function ausgabeParam($param){
  echo $param;
}

//2. alternative: verwende global um die Variable der funktion bekannt zumachen!!!
function ausgabeGlobal(){
  global $name;
  echo $name;
}

ausgabe();
ausgabeParam($name);
// ist die Variable nicht gesetz oder wird nacher gesetzt so sehen wir das nicht!
unset($name); // dadurch passiert nix!! wir sehen weder fehler noch sonst was, wir bemerken nicht das alles schiefläuft!
ausgabeGlobal();


 ?>
