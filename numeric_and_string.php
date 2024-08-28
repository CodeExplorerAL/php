<?php

// 數字運算相加
$a = 10;
$b = 5;
$c = $a + $b;
echo "$c <br/>";       // 15

// 字串運算相加
$a = 10;
$b = 5;
$c = $a . $b;
echo "$c <br/>";      // 105

// 字串運算相加
$a = '10';
$b = '5';
$c = $a + $b;
echo "$c <br/>";      // 15

// 布林值 true 運算
$a = true;
$b = '3';
$c = $a + $b;
echo "$c <br/>";      // 4

// 布林值 false 運算
$a = false;
$b = '3';
$c = $a + $b;
echo "$c <br/>";      // 3

// 浮點數運算
$a = '12.3';
$b = '3';
$c = $a + $b;
echo "$c <br/>";      // 15.3

// Warning: A non-numeric value
$a = '10abc';
$b = '3';
$c = $a + $b;
echo "$c <br/>";      // 13

// Warning: A non-numeric value
$a = '10abc777';
$b = '3';
$c = $a + $b;
echo "$c <br/>";      // 13

// 空字串加字串：Fatal error
$a = ' ';
$b = '3';
$c = $a + $b;
echo "$c <br/>";   // 無輸出結果

// 字串加數字：Fatal error
$a = 'Brad10';
$b = 5;
$c = $a + $b;
echo $c;          // 無輸出結果
