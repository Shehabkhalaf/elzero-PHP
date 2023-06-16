<?php
  $nums = [10, 100, -20, 50, 30];
  $min = $nums[0];
  foreach($nums as $key=>$item):
    if($min>$item):
      $min = $item;
    endif;
  endforeach;
  echo $min;