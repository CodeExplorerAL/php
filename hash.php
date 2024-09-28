<?php // 基本
// $passwd = '123456'; // 密碼加密
// $newpasswd = password_hash($passwd, PASSWORD_DEFAULT); // hash雜錯:用於判別不一樣。(明碼,演算法)
// echo $newpasswd;        // 得出加密密碼
// var_dump($newpasswd);   // 得出字串長度 60 

// // 比對密碼正確或不正確
// if (password_verify('123456', $newpasswd)) {
//   echo 'OK';
// } else {
//   echo 'XX';
// }
?>




<?php // 搭配 html
if (!isset($_POST['account'])) header('Location: hash.php');
// 接收資料 
// echo $_POST['account']; // 怎麼接怎麼收  post接 post收，試試看用GET就無法收到，但如果是用REQUEST就兩者都能收，可以試看看REQUEST，但因為我們講求安全還是用POST
$account = $_POST['account'];
$passwd = password_hash($_POST['passwd'], PASSWORD_DEFAULT); // 加密
$name = $_POST['name'];

// 註冊表單讓使用者可以使用頭像，另外頭像能存在資料表中，配合檔案hash.html
$icon = $_FILES['icon'];
$iconData = file_get_contents($icon['tmp_name']);
$iconType = $icon['type'];

$mysqli = new mysqli('參數IP', '帳號', '密碼', '資料庫');
$mysqli->set_charset('utf8');

// 檢查帳號是否重複，查詢句法
$sql = 'SELECT account FROM member WHERE account = ?';
$stmt = $mysqli->prepare($sql);
$stmt->bind_param('s', $account);
$stmt->execute();                   // 執行
$stmt->store_result();              // 一旦store result就有結果

if ($stmt->num_rows == 0) {
  $sql = 'INSERT INTO member (account,passwd,name, icon, icontype)' .
    ' VALUES (?,?,?,?,?)';
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param('sssss', $account, $passwd, $name, $iconData, $iconType);
  if ($stmt->execute()) {
    echo 'OK';                       // 登入成功導入login畫面
  } else {
    echo 'XX';
  }
} else {
  header('Location: hash.html');     // 登入失敗回到原本的登入畫面
}
?>
