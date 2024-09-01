<?php
// V1(非本科系版)延伸(do{}while(bool);的概念)

$poker = [];

for ($i = 0; $i < 52; $i++) {
  do {
    $temp = rand(0, 51);
    $isRepeat = false;
    for ($j = 0; $j < $i; $j++) {
      if ($temp == $poker[$j]) {
        $isRepeat = true;
        break;
      }
    }
  } while ($isRepeat);

  $poker[$i] = $temp;
  echo "{$poker[$i]}<br />";
}
