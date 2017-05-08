<?php

$obst = array(
    "Apfel",
    "Kiwi",
    "Mango"
);

$gemuesse = array(
    "Salat",
    "Rüben",

);

$produkte = array(
    "obst" => $obst,
    "gemuesse" => $gemuesse
);

var_dump($produkte);

//alternativ auch ohne obst
$produkte2 = array(
    array(
      "Apfel",
      "Birne",
      "Melon"
    )
);
//unterschied ["obst"] wird zu [0]
var_dump($produkte2);

echo "<ul>";
foreach ($produkte as $kategorie => $items) {
    echo "<li>{$kategorie}<ul>";
    foreach ($items as $item) {
        echo "<li>{$item}</li>";
    }
    echo "</ul></li>";
}
echo "</ul>";


 ?>
