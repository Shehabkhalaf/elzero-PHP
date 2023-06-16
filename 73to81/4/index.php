<?php
  $list = filter_list();
  $arr_of_keys = [];
  foreach($list as $item):
    array_push($arr_of_keys,filter_id($item));
  endforeach;
  echo "<pre>";
  print_r(array_combine($arr_of_keys,$list));
  echo "</pre>";
