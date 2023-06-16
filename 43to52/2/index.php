<?php
//Method One
  function get_arguments1(...$sen){
    $all="";
    foreach($sen as $value){
      $all.=$value . " ";
    }
    return $all;
  }
  echo get_arguments("Hello", "Elzero", "Web", "School");

echo "<br>";

  //Method 2
  function get_arguments(){
    $all="";
    foreach(func_get_args() as $value){
      $all.=$value . " ";
    }
    return $all;
  }
  echo get_arguments("I", "Love", "PHP");