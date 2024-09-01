<?php
$a = [];
var_dump($a);

echo '<hr />';

$a[]  =  [];
var_dump($a);

echo '<hr />';

$a[]  =  ['Brad', 'Tony'];
$a[]  = 123;
var_dump($a);

echo '<hr />';

$a[0][] = 3;
var_dump($a);

echo '<hr />';

$a[0][] = [];
var_dump($a);

echo '<hr />';

$a[0][] = [11, 22, 33];
var_dump($a);

echo '<hr>';

echo count($a);
echo '<hr>';
echo count($a[0]);
echo '<hr>';

foreach ($a as $k => $v) {
  if (gettype($v) == 'array') {
    foreach ($v as $kk => $vv) {
      if (gettype($vv) == 'array') {
        foreach ($vv as $kkk => $vvv) {
          echo $vvv . '';
        }
      } else {
        echo $vv;
      }
      echo '<br>';
    }
  } else {
    echo $v;
  }
  echo '<hr>';
}
