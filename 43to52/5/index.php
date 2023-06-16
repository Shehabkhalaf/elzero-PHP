<?php
  function check_status($a, $b, $c) {
    $info = [$a,$b,$c];
    $name="";
    $age=0;
    $statu=false;
    for($i=0;$i<3;$i++):
      if(gettype($info[$i])=="string"){
        $name=$info[$i];
      }elseif(gettype($info[$i])=="integer"){
        $age=$info[$i];
      }else{
        $statu=$info[$i];
      }
    endfor;
    $stat="";
    if($statu===true){
      $stat.="You Are Available For Hire";
    }else{
      $stat.="You Are Not Available For Hire";
    }
    $msg="Hello $name, Your Age Is $age, $stat<br>";
    return $msg;
  }

  // Needed Output
  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"