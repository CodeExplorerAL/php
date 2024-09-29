<?php
$mysqli = new mysqli('參數IP', '帳號', '密碼', '資料庫');
$mysqli->set_charset('utf8');

$result = $mysqli->query('call test1(1,2)');
// 方法任選 看看
// $row = $result->fetch_all();     // array(1) { [0]=> array(1) { [0]=> string(1) "3" } }
// $row = $result->fetch_array();    // array(2) { [0]=> string(1) "3" ["v"]=> string(1) "3" }
$row = $result->fetch_object();   // object(stdClass)#3 (1) { ["v"]=> string(1) "3" }
// var_dump($row);                  // 測試方法看看出現什麼
echo $row->v;   // 叫出結果 3
