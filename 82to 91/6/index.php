<?php
  $handle=fopen("elzero.txt","r");
  echo fgets($handle).fgets($handle)."<br>";
  $pointer=ftell($handle);

  fseek($handle,0);
  $data=file("elzero.txt");
  for($i=0;($i<count($data)-1);$i++){
    echo $data[$i];
  }
  echo "<br>";

  while(!feof($handle) && ftell($handle)!=$pointer){
    echo fgets($handle);
  }
  echo "<br>";
  fseek($handle,0);

  $fileData=file_get_contents("elzero.txt");
  for($i=0;$i<strlen($fileData);$i++){
    if($fileData[$i]=='N'){
      break;
    }
    echo $fileData[$i];
  }


