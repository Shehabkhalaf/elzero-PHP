<?php
  $nums = [10, 100, -20, 50, 30];
  $max = $nums[0];
  foreach($nums as $key=>$item):
    if($max<$item):
      $max = $item;
    endif;
  endforeach;
  echo $max;