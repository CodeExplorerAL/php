<?php
$max = 100;
if (isset($_REQUEST["max"]) && strlen($_REQUEST["max"]) > 0) {     //若沒加strlen，空字串輸入時會出現Fatal error: Uncaught TypeError: rand(): Argument #2 ($max) must be of type int, string given in C:\xampp\htdocs\phpd06\brad48.php:6 Stack trace: #0 C:\xampp\htdocs\phpd06\brad48.php(6): rand(1, 'undefined') #1 {main} thrown in C:\xampp\htdocs\phpd06\brad48.php on line 6
  $max = $_REQUEST['max'];
}
echo rand(1, $max);
