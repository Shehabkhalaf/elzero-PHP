<?php
function change_permissions($file){
  if(is_dir($file)){
    return "This Is Directory And Only Files Allowed" . "<br>";
  }
  if(pathinfo($file)["extension"]!="txt"){
    return "File Extension Is Not Txt" . "<br>";
  }
  if(chmod($file,07000)){
    return "Permissions Changed";
  }
}

  echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
  echo change_permissions("Work.docx"); // File Extension Is Not Txt
  echo change_permissions("Result.txt"); // Permissions Changed