<?php
// 插入表單
// $fp = fopen('dir.php', 'r');
// if ($fp) {
//   while (($line = fgets($fp)) !== false) {
//     // 處理每一行的數據
//     echo $line;
//   }
//   fclose($fp);
// } else {
//   // 文件打開失敗
//   echo "無法打開文件";
// }


// $mysqli = new mysqli('參數IP', '帳號', '密碼', '資料庫');
// // $mysqli->query('CREATE DATABASE iii');              // 建立資料庫 玩玩用的
// $mysqli->set_charset('utf8');

// $sql = 'INSERT INTO iii (`name`,`addr`) VALUES ("AAA","abcdefg")';  // 插入表單內容 ``倒引線可以省略，不過怕會跟關鍵字互衝
// $mysqli->query($sql);


$json = file_get_contents('https://data.moa.gov.tw/Service/OpenData/ODwsv/ODwsvAgriculturalProduce.aspx');

$data = json_decode($json);

$mysqli = new mysqli('參數IP', '帳號', '密碼', '資料庫');
$mysqli->set_charset('utf8');
$mysqli->query('DELETE FROM gift');
$mysqli->query('ALTER TABLE gift AUTO_INCREMENT = 1');  // 讓資料重新歸零插入

foreach ($data as $v) {
  $name = $v->Name;
  $addr = $v->SalePlace;
  $feature = $v->Feature;
  $picture = $v->Column1;
  $city = $v->County;
  $town = $v->Township;
  $lng = $v->Longitude;
  $lat = $v->Latitude;
  $sql = "INSERT INTO gift (name,addr,feature,picture,city,town,lat,lng)" .
    "VALUES ('$name','$addr','$feature','$picture','$city','$town',$lat,$lng)";
  $mysqli->query($sql);
}
