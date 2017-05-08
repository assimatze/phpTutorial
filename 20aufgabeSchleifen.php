<?php

$startWert = 1;
$zielWert = 100;
$ergebnisFor = 0;
$ergebnisWhile = 0;

for($i = $startWert; $i <= $zielWert ; $i++){
  $ergebnisFor += $i;
  var_dump($ergebnisFor);
}

echo "</br>";
$j = $startWert;
while ($j <= $zielWert) {
  $ergebnisWhile += $j;
  $j++;
  var_dump($ergebnisWhile);

}

echo "</br>";
// Continue: überspringe einen schleifen durchlauf bsp überspringe 13
for($i = $startWert; $i <= $zielWert ; $i++){
  if( $i === 13){
    continue;
  }
  var_dump($i);
}

echo "</br>";
// break: brich die momentane Schleife ab!
for($i = $startWert; $i <= $zielWert ; $i++){
  if( $i === 13){
    break;
  }
  var_dump($i);
}

?>
