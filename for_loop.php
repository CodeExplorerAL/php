<?php
for ($i = 0; $i < 10; $i++) {
  echo "{$i}<br />";
}
?>

<hr />

<!-- while的用法 -->
<?php
$i = 0;
for (; $i < 10;) {
  echo "{$i}<br />";
  $i++;
}
?>

<hr />

<!-- for不只是迴圈 -->
<?php
$i = 0;
for (printA(); $i < 10; printLine()) {
  echo "{$i}<br />";
  $i++;
}

function printA()
{
  echo "A";
  printLine();
}

function printLine()
{
  echo "<hr />";
}
?>