<?php   // 叫出procedure
$pdo = new PDO("mysql:host=IP;port=撥號;dbname=資料庫", "使用者", "密碼"); // 我要跟mysql講話，主機localhost;port號3306(預設，如果不是去確認);庫名iii


$stmt = $pdo->prepare('call test1(?,?)');     // 操作pdo 綁定型別 // 一開始寫test1(10,3)，後來改成test1(?,?)
// 使用pdo寫insert into  老師沒有寫，自己寫我還沒寫完
// $sql = "INSERT INTO member (id, account, passwd) VALUES (?,Joy,123456)";   
$param = [10, 3];               // 改成test1(?,?)加入這行
$stmt->execute($param);          // 改成test1(?,?)加入$param
$result = $stmt->fetchObject();
// var_dump($result);  // object(stdClass)#3 (1) { ["v"]=> int(13) }
echo $result->v;        // 13
