<form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Send">
</form>

<?php
  $admins = ["Osama", "Ahmed", "Sayed"];
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["user"];
    echo "<h3>The Request Method Is Post And Username Is $name</h3>";
    if(in_array($name,$admins)){
      echo "<h3>This Username $name Is Admin</h3>";
    }else{
      echo "<h3>This Username $name Is Not Admin</h3>";
    }
  }
?>

