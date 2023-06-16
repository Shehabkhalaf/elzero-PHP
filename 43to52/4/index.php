<?php
  function multiply(...$args){
    $product=1;
    foreach($args as $arg):
      $num= gettype($arg) != "string" ? (int)$arg : 1;
      $product*=$num;
    endforeach;
    return $product;
  }
  echo multiply(10, 20) . "<br>";
  echo multiply("A", 10, 30) . "<br>";
  echo multiply(100.5, 10, "B") . "<br>";
