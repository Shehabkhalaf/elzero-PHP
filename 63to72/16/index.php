<?php
  $mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
  function odd($item){
    if(gettype($item)=="string"){
      return false;
    }
    return true ? $item%2!=0 : false; 
  }
  $mix = array_filter($mix,"odd");
  sort($mix);
  echo "<pre>";
  print_r($mix);
  echo "</pre>";