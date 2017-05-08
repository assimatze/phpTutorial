<?php

echo '$name = "0";'; // ein String mit "0" ist empty(true)
$name = "0";
echo "</br>=>";
var_dump(empty($name));
echo "</br></br>";

echo '$name = 0;'; // eine Zahl mit 0 ist empty(true)
$name = 0;
echo "</br>=>";
var_dump(empty($name));

echo "</br></br>"; //Vergelich zwischen "0" == 0 ergibt true
echo '$name1 = 0;</br>';
echo '$name2 = "0";';
$name1 = 0;
$name2 = "0";
echo '</br> Vergleich var_dumP($name1 == $name2)=>';
var_dump($name1 == $name2);
echo '</br> Vergleich var_dumP($name1 === $name2)=>';
var_dump($name1 === $name2);

//PHP verfügt über type guessing
echo "</br></br>";
echo '$name1 = 123;</br>';
echo '$name2 = "321";';
$name1 = 123;
$name2 = "321";
echo '</br>addiere var_dumP($name1 + $name2) = >';
var_dump($name1 + $name2);

?>
