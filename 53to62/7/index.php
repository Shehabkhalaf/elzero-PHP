<?php
  $chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
  $str = implode("",$chars);
  $str_cpy="";
  for($i=0;$i<strlen($str);$i++):
    $str_cpy.=($str[$i]>=ord("a")&&$str[$i]<="z")||($str[$i]>=ord("A")&&$str[$i]<="Z") ? $str[$i]=strtolower($str[$i]) :"";
  endfor;
  echo ucfirst(strtolower($str_cpy));