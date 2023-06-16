<?php
  function calculate($num1,$num2,$operator="a"){
    $result=-99999;
    if($operator=="a"||$operator=="add"){
      $result=$num1+$num2;
    }elseif($operator=="s"||$operator=="subtract"){
      $result=$num1-$num2;
    }elseif($operator=="m"||$operator=="multiply"){
      $result=$num1*$num2;
    }else{
      $result=$num1/$num2;
    }
    return $result==-99999 ? "Unkown Operator!<br>" : $result . "<br>";
  }
  echo calculate(10, 20); 
  echo calculate(10, 20, "a"); 
  echo calculate(10, 20, "s"); 
  echo calculate(10, 20, "subtract"); 
  echo calculate(10, 20, "multiply"); 
  echo calculate(10, 20, "m"); 
