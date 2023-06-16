<?php
  $mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
  $nums = [4, 5, 6];

  sort($mix);
  for($i=0;$i<3;$i++){
    array_pop($mix);
  }
  for($i=0;$i<count($nums);$i++){
    array_push($mix,$nums[$i]);
  }
  sort($mix);
  echo "<pre>";
  print_r($mix);
  echo "</pre>";