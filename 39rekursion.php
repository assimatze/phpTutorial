<?php

function summe($zahl){
  //var_dump($zahl);
  if($zahl <= 0){
    return 0;
  }
    return summe($zahl - 1) + $zahl;
}

var_dump(summe(100));

function fib($n){
  echo '$n = '.$n.'</br>';
  echo 'if($n == '.$n.' || $n == '.$n.' )==> ';
  if($n == 1 || $n == 2){
    echo "final 1";
    return 1;
  }else{
    echo 'else</br>';
    $a = fib($n - 2);
    $b = fib($n - 1);
    return $a + $b;
  }
}
var_dump(fib(4));

?>
