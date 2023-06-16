<?php
  $start = 0;
  $mix = [1, 2, 3, "A", "B", "C", 4];
  foreach($mix as $start => $value):
    if((!($value>=65) || !($value>=90)) && (!($value>=97) || !($value>=122))  && $value!=1){
      echo "$value<br>";
    }
  endforeach;
