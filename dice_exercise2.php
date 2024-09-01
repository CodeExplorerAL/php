<!-- 陣列版本 -->
<?php
$p = array(1 => 0, 0, 0, 0, 0, 0);
// var_dump($p);       // array(6) { [1]=> int(0) [2]=> int(0) [3]=> int(0) [4]=> int(0) [5]=> int(0) [6]=> int(0) }

for ($i = 0; $i < 100; $i++) {
  $point = rand(1, 6);
  $p[$point]++;
}
foreach ($p as $point => $times) {
  echo "{$point}點出現{$times}次<br>";
}

?>

<!-- 調整機率 -->
<?php
$p = array(1 => 0, 0, 0, 0, 0, 0);

for ($i = 0; $i < 100; $i++) {
  $point = rand(1, 9);
  $p[$point > 6 ? $point - 3 : $point]++;
}
foreach ($p as $point => $times) {
  echo "{$point}點出現{$times}次<br>";
}
?>