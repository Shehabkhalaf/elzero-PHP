<?php
  function greeting($name,$gender=""){
    $greet = $gender==="Male" ? "Mr": ($gender==="Female" ? "Miss":"");
    return "Hello $greet $name<br>";
  }
  echo greeting("Osama", "Male");
  echo greeting("Eman", "Female");
  echo greeting("Sameh");