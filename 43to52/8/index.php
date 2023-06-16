<?php
  $message = "Hello";
  $$message = fn($someone)=>"Hello $someone";
  echo $Hello("Osama"); // Hello Osama