<?php
  $cSize=round(disk_total_space("c:")/(1024**4),2);
  $dSize=round(disk_total_space("d:")/(1024**4),2);
  echo "$cSize Terabyte" . "<br>";
  echo "$dSize Terabyte";