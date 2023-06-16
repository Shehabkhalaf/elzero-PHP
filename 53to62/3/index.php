<?php
  $str = 'aAa';
  $num = 3;
  $char = "_";
  echo str_repeat(str_pad(strtolower($str),4,"_",STR_PAD_RIGHT),3);

// aaa_aaa_aaa_