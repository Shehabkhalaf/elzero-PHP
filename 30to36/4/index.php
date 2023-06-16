<?php
  $a = 30;
  $b = 20;
  $c = 10;
  $sab=$a + $b;
  $sac=$a + $c;
  $sbc=$c + $b;

  echo ($sab===$c)?"A + B = C":(($sac===$b)?"A + C = B":(($sbc===$a)?"B + C = A":"The End"));


