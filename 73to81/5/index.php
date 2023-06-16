<?php
  $url1 = "http://www.elz ero.org";
  $url2 = "http://¥elzero.org";
  $url3 = "https://elzero.org";
  $url4 = "https://elzero.o¥rg";
  function valid($url){
    return filter_var($url,FILTER_VALIDATE_URL) ? "A VALID URL<br>" : "NOT A VAILD URL<br>";
  }

  echo valid($url1);
  echo valid($url2);
  echo valid($url3);
  echo valid($url4);
