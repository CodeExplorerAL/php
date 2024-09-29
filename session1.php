<?php
include("apis.php");    // 檔案apis，class和外部操作結束後來到這
session_start(); // 如果組態檔session.auto_start=0 關起來的，就要加入這個，如果不確定就都加，起碼可以開

$rand = rand(1, 49);
echo $rand;
$_SESSION['rand'] = $rand;
$rand = 1000;   // 基本型別要在最後給，不然帶過去的會是舊的值

$ary = [1, 2, 3, 4, 5];
$_SESSION['ary'] = $ary;   // 把上面的陣列丟來這，看會不會被帶著走，去檔案2看一下，將檔案session2 if...先註解
// $ary = [1,2,6,4,5];         // 玩玩上面兩行，再來看看值的變動有沒有帶來 -> 沒有變動，因為陣列是多個值得集合，比較特別

// 檔案apis，class和外部操作結束後來到這
$s1 = new Student('AAA', 70, 45, 56);
echo "<br>{$s1->getName()} : {$s1->sum()} :{$s1->avg()}";

// 檔案apis， 改成績結束後來到這
$_SESSION['s1'] = $s1;
$s1->setMath(100);
?>

<a href='session2.php'>Next</a>