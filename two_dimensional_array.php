<?php
$a[] = 12;      // 只要[]一寫就已經是陣列了
var_dump($a);   // array(1) { [0]=> int(12) }

echo '<hr>';

$a[] = 'A';     // 合併上條
var_dump($a);   // array(2) { [0]=> int(12) [1]=> string(1) "A" }

echo '<hr>';

$a[7] = 'OK';   // 跳到7
var_dump($a);   // array(3) { [0]=> int(12) [1]=> string(1) "A" [7]=> string(2) "OK" }

echo '<hr>';

$a[] = '1234';   // 接續7
var_dump($a);    // array(4) { [0]=> int(12) [1]=> string(1) "A" [7]=> string(2) "OK" [8]=> string(4) "1234" }

echo '<hr>';

$a['name'] = 'Tony';      // 增加新鍵'name'
$a['gender'] = 'true';    // 增加新鍵'true'
$a['age'] = '18';         // 增加新鍵'18'
var_dump($a);  // array(7) { [0]=> int(12) [1]=> string(1) "A" [7]=> string(2) "OK" [8]=> string(4) "1234" ["name"]=> string(4) "Tony" ["gender"]=> string(4) "true" ["age"]=> string(2) "18" }
