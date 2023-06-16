<?php
  /*setcookie("site[layout]","boxed",strtotime("+2 months 5 days"),"/");
  setcookie("site[font]","Swat",strtotime("+2 months 5 days"),"/");
  setcookie("site[color]","blue",strtotime("+2 months 5 days"),"/");
  echo "<pre>";
  print_r($_COOKIE);
  echo "</pre>";*/
  setcookie("site[layout]","boxed",time()-1,"/");
  setcookie("site[font]","Swat",0,"/");
  setcookie("site[color]","blue",0,"/");