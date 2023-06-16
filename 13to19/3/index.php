<?php
$a = 200;
$b = &$a; // here we put this reference to make chages to both of them
$a = 100;

echo $b; // 100