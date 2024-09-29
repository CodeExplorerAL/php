<?php
//  檔案apis，class和外部操作結束後來到這一行
include('apis.php');

session_start();
// if (!isset($_SESSION["rand"])) header("location: session1.php");   // 檔案3玩玩再來這 ，這句意思為 如果沒有session就別來了，刷新檔案2它會跑去檔案1 //檔案1 使用$ary時，先把這註解

$rand = $_SESSION['rand'];
echo $rand;

// 檔案1 $ary測試，測試結果 陣列也有被帶來
$ary = $_SESSION['ary'];
var_dump($ary);

// 檔案apis， 改成績結束後來到這
$s1 = $_SESSION['s1'];
echo "<br>{$s1->getName()} : {$s1->sum()} :{$s1->avg()}<br>";

?>

<a href="session3.php">Game Over</a>