<?php
  $nums = [10, 20, 30];
  echo array_sum($nums) . "<br>";
  function arraySum($carry,$item){
    return $carry + $item;
  }
  echo array_reduce($nums,"arraySum");
  //echo array_reduce($nums,function($carry,$item){return $carry + $item;});

// Output
