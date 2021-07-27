<?php
  function select_random($array) {
    $min = 0;
    $max = count($array) - 1;
    $key = mt_rand($min, $max);
    $result = $array[$key];
    return $result;
  }
?>