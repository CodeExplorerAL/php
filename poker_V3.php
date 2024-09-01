<?php

$poker = range(0, 51);

for ($i = 0; $i < count($poker); $i++) {

  $randomIndex = rand(0, count($poker) - 1);

  $temp = $poker[$i];
  $poker[$i] = $poker[$randomIndex];
  $poker[$randomIndex] = $temp;
}

foreach ($poker as $card) {
  echo "{$card}<br>";
}
