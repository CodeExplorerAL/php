<?php // 寫入資料
// $mysqli = new mysqli('參數IP', '帳號', '密碼', '資料庫');   // 連接資料庫
// $mysqli->set_charset('utf8');

// $account = 'AAA';
// $passwd = '1234';
// $name = 'A';


// 寫法一_一般寫入資料庫寫法
// $sql1 = "INSERT INTO member (account,passwd,name)" .
//   "VALUES('{$account}','{$passwd}','{$name}')";
// // echo $sql1;          // 檢查輸入到SQL的指令是什麼
// if ($mysqli->query($sql1)) {
//   echo "OK";
// } else {
//   echo "XX";
// }
// echo '<hr>';


// 寫法二_避免隱碼攻擊_綁定參數
// $sq12 = "INSERT INTO member (account,passwd,name)" . "VALUES(?,?,?)";
// $stmt = $mysqli->prepare($sq12);
// $stmt->bind_param("sss", $account, $passwd, $name);   // (字串(3個欄位都給它),不定參數的綁定(問號?有幾個就有幾個))
// if ($stmt->execute()) {
//   echo "OK2";
// } else {
//   echo "XX2";
// }
?>




<?php   // 更新資料
// $mysqli = new mysqli('參數IP', '帳號', '密碼', '資料庫');
// $mysqli->set_charset('utf8');

// $account = 'BBB';
// $name = 'B';
// $id = 0;

// $sq12 = 'UPDATE member SET account=?,name=? WHERE id =?';
// $stmt = $mysqli->prepare($sq12);
// $stmt->bind_param('ssi', $account, $name, $id);
// if ($stmt->execute()) {
//   echo "OK3";
// } else {
//   echo "XX3";
// }
?>



<?php   // 砍資料
// $mysqli = new mysqli('參數IP', '帳號', '密碼', '資料庫');
// $mysqli->set_charset('utf8');

// $id = 0;

// $sq12 = 'DELETE FROM member WHERE id = ?';
// $stmt = $mysqli->prepare($sq12);
// $stmt->bind_param('i', $id);
// if ($stmt->execute()) {
//   echo "OK4";
// } else {
//   echo "XX4";
// }
?>



<?php // 查詢資料
// $mysqli = new mysqli('參數IP', '帳號', '密碼', '資料庫');    // 登入資料庫
// $mysqli->set_charset('utf8');

// $sql = 'SELECT name gname, city country FROM gift';
// $sql = "SELECT name, city  FROM gift ";

// $result = $mysqli->query($sql);       // 查詢


// var_dump($result);                // object(mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(9) ["lengths"]=> NULL ["num_rows"]=> int(211) ["type"]=> int(0) }

// $row = $result->fetch_object();
// var_dump($row);     

// $row = $result->fetch_object();     // 再fetch一次，可多得到下一筆資料
// var_dump($row);            


// 如何撈出所有資料
// while ($row = $result->fetch_object()) {
//   echo "{$row->gname}:{$row->country}<br>";       // 印出來
// }
?>



<?php
// define('RPP', 10);     // 製作分頁 
// $rpp = 10;          // 不使用上面定義的常數RPP，增加變數  -> 方法一，方法二是保留定義 
// $page = 1;             // 第一頁
// if (isset($_GET['page'])) $page = $_GET['page'];
// $start = ($page - 1) * $rpp; // 起始  
// $prev = $page - 1;
// $next = $page + 1;

// $mysqli = new mysqli('參數IP', '帳號', '密碼', '資料庫');    // 登入資料庫
// $mysqli->set_charset('utf8');

// $sql = 'SELECT id,name,addr,city,town,picture,feature FROM gift';
// if (isset($_GET['key']) && strlen($_GET['key']) > 0) {       // 搜尋但還可以有分頁
//   $key = $_GET['key'];
//   $key2 = "%{$key}%";               // 搜尋功能

//   $sql .= ' WHERE name LIKE ? OR addr LIKE ? OR feature LIKE ?';     // 搜尋功能
//   $sql .= ' LIMIT ?, ?';       // 搜尋預設

//   $stmt = $mysqli->prepare($sql);
//   $stmt->bind_param('sssii', $key2, $key2, $key2, $start, $rpp);  // 綁定參數  // 分頁搜尋條件
// } else {
//   $sql .= ' LIMIT ?, ?';  // 起始,結尾    // 搜尋預設
//   $key = '';
//   $stmt = $mysqli->prepare($sql);
//   $stmt->bind_param('ii', $start, $rpp);       // 同上
// }

// // $stmt = $mysqli->prepare($sql);         // 產生敘述句
// if ($stmt->execute()) {                  // IF用於看結果而已 ; 執行它。
//   $stmt->store_result();              // 產生結果
//   $stmt->bind_result($id, $name, $addr, $city, $town, $picture, $feature);   // 將想要看的變數綁在結果

//   $stmt->fetch();                     // 撈資料
//   echo "{$id}:{$name}<br>";           // 稍微看個結果就好，所以沒有帶出全部變數

//   // 下面因為要做表格，所以給它註解起來
//   while ($stmt->fetch()) {            // 跟上一個一樣，知道會帶出下一筆下一筆，透過迴圈帶出全部資料
//     echo "{$id}:{$name}<br>";
//   }
// } else {
//   echo 'XX';
// }

?>

<!-- 做表單，沒有給action是因為就在這程式處理了，沒必要套用其他程式檔-->
<!-- <form>
  Keyword:<input name="key" value='<?php echo $key; ?>'>
  <input type="submit" value="Search">
</form> -->

<hr>
<!-- 製作分頁 & 搜尋後分頁 -->
<!-- <a href='?page=<?php echo $prev; ?>&key=<?php echo $key; ?>'>Prev</a> |
<a href='?page=<?php echo $next; ?>&key=<?php echo $key; ?>'>Next</a> -->

<hr>

<!-- 將上面資料製作成表格 -->
<!-- <table border="1" width='100%'>
  <tr>
    <th>#</th>
    <th>產品名</th>
    <th>介紹</th>
    <th>地址</th>
    <th>城市</th>
    <th>鄉鎮</th>
    <th>相片</th> -->
</tr>
<?php
// while ($stmt->fetch()) {
//   echo '<tr>';
//   echo "<td>{$id}</td>";
//   echo "<td>{$name}</td>";
//   echo "<td>{$feature}</td>";
//   echo "<td>{$addr}</td>";
//   echo "<td>{$city}</td>";
//   echo "<td>{$town}</td>";
//   echo "<td><a href='{$picture}'><img src='{$picture}' width='80px' height='45px'></td>";
//   echo '</tr>';
// }
?>
</table>

<?php   // 把本來上面的phpwhile...else的else搬下來
// } else {
//   echo 'XX';
// }
?>