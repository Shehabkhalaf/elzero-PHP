<?php
  $codes = ["H", "C", "J"];
  $means = ["HTML", "CSS", "JavaScript"];
  $combine = array_combine($codes,$means);
  $combine = array_change_key_case($combine,CASE_LOWER);
  echo "<pre>";
  print_r($combine);
  echo "</pre>";