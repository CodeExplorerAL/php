<?php
$pdo = new PDO("mysql:host=IP;port=撥號;dbname=資料庫", "使用者", "密碼"); // 我要跟mysql講話，主機localhost;port號3306(預設，如果不是去確認);庫名iii

$sql = 'SELECT * FROM gift';
$stmt = $pdo->prepare($sql);
$stmt->execute();                                 // 執行
$result = $stmt->fetchALL(PDO::FETCH_OBJ);      // 取得
// var_dump($result);
foreach ($result as $row) {
  echo "{$row->name}<br>";
}
