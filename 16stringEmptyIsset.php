<?php

$emptyString = ""; //'' ebenfalls
$emptyNumber = 0; // DIe Zahl null bedeutet ebenfalls empty!!
$emptyNumberAsString = "0"; // auch empty

echo "empty Values: </br>";
var_dump(empty($emptyString));
var_dump(empty($emptyNumber));
var_dump(empty($emptyNumberAsString));
echo "</br>",

$emptyString = ""; //'' ebenfalls
$emptyNumber = 0; // DIe Zahl null bedeutet ebenfalls empty!!
$emptyNumberAsString = "0"; // auch empty

echo "isset Values: </br>";
var_dump(isset($emptyString));
var_dump(isset($emptyNumber));
var_dump(isset($emptyNumberAsString));
var_dump(isset($name));


?>
