<?php

// 函式
function sayYa()
{
  echo 'Ya<br />';
}
sayYa();             //-> Ya


// 重複定義
// function sayYa() {
// }

echo '<hr>';

// 至少1個參數
function sayHello($name = 'World')
{
  echo "Hello, $name <br />";
}

sayHello();                     //-> Hello World
sayHello('AAA');          //-> Hello, AAA
sayHello('BBB', 2);       //-> Hello, BBB

echo '<hr>';

// 至少2個參數
function sayHello2($name, $n)
{
  for ($i = 0; $i < $n; $i++) {
    echo "Hello, {$name} <br />";
  }
}
sayHello2('CCC', 2);      //-> Hello, CCC * 2遍

echo '<hr>';

// 至少1個參數 + 預設(可有可無)
function sayHello3($name, $n = 3)
{
  for ($i = 0; $i < $n; $i++) {
    echo "Hello, {$name} <br />";
  }
}

sayHello3('DDD');     //-> Hello, DDD * 3遍

echo  '<hr />';

// 2個都預設
function sayHello4($name = 'World', $n = 1)
{
  for ($i = 0; $i < $n; $i++) {
    echo "Hello, {$name}<br />";
  }
}

SayHello4();                     //-> Hello, World
SayHello4('EEE', 4);    //-> Hello, EEE * 4 遍
sayHello4(4);              //->Hello, 4 
// sayHello4( ,4);               //-> Parse error

echo "<hr />";

// 命名args是參數的意思
function sum()
{
  echo func_num_args();
}
// sum(1, 2, 3);                            //-> 3
// sum(1, 2, 3, 7, 8, 9);                   //-> 36
// sum(1, 2, 3, 7, 8, 9, 100, 200, 300);    //-> 369
$v1 = sum(1, 2, 3, 4);
echo $v1;                                   //-> 4

echo '<hr />';

function sum1()
{
  $ary = func_get_args();
  var_dump($ary);
}

sum1(1, 2, 3, 7, 8, 9, 100, 200, 300, 'FFF');   //-> array(10) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(7) [4]=> int(8) [5]=> int(9) [6]=> int(100) [7]=> int(200) [8]=> int(300) [9]=> string(3) "FFF" }

echo '<hr />';

function sum2()
{
  $ary = func_get_args();
  $sum = 0;
  foreach ($ary as $v) {
    $sum += $v;
  }
  return $sum;
}

$v1 = sum2(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);       //-> 55
echo $v1;
