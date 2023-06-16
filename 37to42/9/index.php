<?php
  $help_num = 3;
  $nums = [4, 5, 6, 1, 2, 3];
  $names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];
  for(;$help_num>=0;$help_num--){
    if($names[$help_num]=="Osama" || $names[$help_num]=="Sayed"){
      echo $names[$help_num] . "<br>";
    }
  }
