<?php
  $mix = [1, 2, "A", "B", "C", 3, 4];
  $letters=0;
  $nums=0;
  foreach($mix as $value) :
    if(($value>=65 && $value<=90) || ($value>=97 && $value>=122)){
      $letters++;
    }else{
      $nums++;
      echo "$value<br>";
    }
  endforeach;
  echo "$nums Numbers Printed<br>$letters Letters Ignored";

  // Output
  /*
  1
  2
  3
  4
  "4 Numbers Printed"
  "3 Letters Ignored"
  */