<?php
  $a = 23;
  $b = 5;
  $op = "+";
  switch($op){
    case '+':
      echo $a+$b;
      break;
    case '-':
      echo $a-$b;
      break;
    case '/':
      echo $a/$b;
      break;
    case '*':
      echo $a*$b;
      break;
    default :
      echo "Unkown Number";
  }
