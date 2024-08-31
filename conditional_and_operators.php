<?php
$a = 10;
$b = 3;
if ($a++ > 10 && $b-- < 3) {
  echo "OK: a = {$a} ; b = {$b}";
} else {
  echo "XX: a = {$a} ; b = {$b}";
}
?>

<hr />

<?php
$a = 10;
$b = 3;
if ($a++ >= 10 && $b-- < 3) {
  echo "OK: a = {$a} ; b = {$b}";
} else {
  echo "XX: a = {$a} ; b = {$b}";
}
?>

<hr />

<?php
$a = 10;
$b = 3;
if ($a++ >= 10 || $b-- < 3) {
  echo "OK: a = {$a} ; b= {$b}";
} else {
  echo "XX: a = {$a} ; b= {$b}";
}
?>

<hr />

<?php
$a = 10;
$b = 3;
if (++$a >= 10 || --$b < 3) {
  echo "OK: a = {$a} ; b= {$b}";
} else {
  echo "XX: a = {$a} ; b= {$b}";
}
?>

<hr />

<?php
$a = 10;
$b = 3;
if (++$a >= 10 && --$b < 3) {
  echo "OK: a = {$a} ; b= {$b}";
} else {
  echo "XX: a = {$a} ; b= {$b}";
}
?>

<hr />

<?php
$a = 10;
$b = 3;
if (++$a >= 10 | --$b < 3) {
  echo "OK: a = {$a} ; b= {$b}";
} else {
  echo "XX: a = {$a} ; b= {$b}";
}
?>

<hr />

<?php
$a = 10;
$b = 3;
if ($a++ > 10 & --$b < 3) {
  echo "OK: a = {$a} ; b= {$b}";
} else {
  echo "XX: a = {$a} ; b= {$b}";
}
?>

<hr />
<hr />

<?php
$c = 3;
$d = 2;
echo $c & $d;
?>

<hr />

<?php
$c = 3;
$d = 2;
echo $c | $d;
?>

<hr />

<?php
$c = 3;
$d = 2;
echo $c ^ $d;
?>

<hr />
<hr />

<?php
$a = 10;
$b = 3;
$c = $a;
$a = $b;
$b = $c;
echo "a={$a}; b={$b}";
?>

<hr />

<?php
$a = 10;
$b = 3;
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "a={$a}; b={$b}";
?>

<hr />

<?php
$a = 10;
$b = 3;
$a = $a ^ $b;
$b = $a ^ $b;
$a = $a ^ $b;
echo "a={$a}; b={$b}";
?>