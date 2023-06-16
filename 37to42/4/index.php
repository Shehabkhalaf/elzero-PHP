<?php
  $start = 10;
  $end = 0;
  $stop = 3;
  for(;$start<=10;$start--):
    if($start<3):
      break;
    endif;
    echo $start < 10 ? "$end$start<br>" : "$start<br>";
  endfor;