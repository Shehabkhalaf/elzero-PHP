<?php 
  $nums = [5, 10, 20, 5, 30, 40];
  function sumEx5($carry,$item){
    return $item==5 ? $carry : $carry + $item;
  }
  echo array_reduce($nums,"sumEx5");