<?php
// 1. 洗牌
// V1 (非本科系版)(while(bool)do{}的概念)

$poker = [];

for ($i = 0; $i < 52; $i++) {

  $temp = rand(0, 51);
  $isRepeat = false;

  for ($j = 0; $j < $i; $j++) {
    if ($temp == $poker[$j]) {
      $isRepeat = true;
      break;
    }
  }

  if (!$isRepeat) {
    $poker[$i] = $temp;
    echo "{$poker[$i]}<br>";
  } else {
    $i--;
  }
}
