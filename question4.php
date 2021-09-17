<?php

function isBeautiful($integer) {
  $num_digits = strlen((string)$integer);
  if ($num_digits % 2 === 1) return false;

  $num_arr  = array_map('intval', str_split($integer));
  $sum_left = 0;
  $sum_right = 0;

  for ($i = 0; $i < $num_digits / 2; $i++) {
    $sum_left += $num_arr[$i];
    $sum_right += $num_arr[$i + $num_digits / 2];
  }

  if ($sum_left === $sum_right) return true;
  return false;
}

$num = 123006;
echo isBeautiful($num) ? 'beautiful' : 'not beautful';
