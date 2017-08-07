<?php

$staedte = array(
  "berlin" => null,
  "hamburg" => 200,
  "rastatt" => 200
);
echo 'isset($staedte["berlin"]) = ';
var_dump(isset($staedte["berlin"])); // ergibt true falls key vorhanden und NICHT (berlin => null)ist  === bool(false)
echo '</br>';
echo 'isset($staedte["budapest"]) = ';
var_dump(isset($staedte["budapest"])); // ergibt false da nicht im array und somit nicht gesetzt!
echo '</br>';

echo 'isset($empty["berlin"]) = ';
var_dump(empty($staedte["berlin"])); // empty gibt true zurück da berlin => 0 gibt true bei berlin => null;
echo '</br>';
echo 'isset($empty["berlin"]) = ';
var_dump(empty($staedte["budapest"])); // empty gibt true zurück da budapest nicht vorhanden
echo '</br>';

echo 'unset($staedte["berlin"]) = ';
unset($staedte["berlin"]); // löscht den schlüssel und wert
var_dump($staedte); // nur noch hamburg und reastat da berlin unset ausgeführt hat
echo "</br>";
echo 'unset($staedte);'; // löscht den schlüssel und wert
var_dump(isset($staedte));
echo "</br>";

unset($staedte); // löscht gesamtes array;
var_dump(isset($staedte));

 ?>
