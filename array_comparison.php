<?php
$a = array(1, 2, 3, 4, 5);  // array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
var_dump($a);
echo '<hr />';
$a[2] = 123;                // array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(123) [3]=> int(4) [4]=> int(5) }
var_dump($a);
echo '<hr />';
$a[7] = 12.3;               // array(6) { [0]=> int(1) [1]=> int(2) [2]=> int(123) [3]=> int(4) [4]=> int(5) [7]=> float(12.300000000000000710542735760100185871124267578125) }
var_dump($a);
echo '<hr />';
$a[777] = 'A';              // array(7) { [0]=> int(1) [1]=> int(2) [2]=> int(123) [3]=> int(4) [4]=> int(5) [7]=> float(12.300000000000000710542735760100185871124267578125) [777]=> string(1) "A" }
var_dump($a);

echo '<hr />';

for ($i = 0; $i < count($a); $i++) {
  echo "{$a[$i]}<br>";
}
// 1
// 2
// 123
// 4
// 5
// Undefined
// Undefined

echo '<hr>';

foreach ($a as $v) {
  echo "{$v}<br />";
}
// 1
// 2
// 123
// 4
// 5
// 12.3
// A

echo '<hr>';

foreach ($a as $k => $v) {
  echo "{$k}:{$v}<br />";
}
// 0:1
// 1:2
// 2:123
// 3:4
// 4:5
// 7:12.3
// 777:A