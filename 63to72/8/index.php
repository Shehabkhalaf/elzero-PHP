<?php
  $chars = ["A", "B", "C"];
  //$chars[] = "D";
  //array_push($chars,"D");
  //$chars[3]="D";
  $chars = array_merge($chars , ["D"]);
  echo "<pre>";
  print_r($chars);
  echo "</pre>";
