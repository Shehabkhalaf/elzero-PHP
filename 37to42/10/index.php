<?php
  $nums = [2, 4, 5, 6, 10];
  $help_num = 4;
  for($i=0;$i<5;$i++):
    $index = $help_num-$i;
    $sum = $nums[$i] + $nums[$index];
    echo $nums[$i] . "\t\t+\t\t" . $nums[$index] . "\t\t=\t\t" . "$sum<br>";
  endfor;