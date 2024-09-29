<?php
// 檔案apis 建構存取後來到這兩行
include("apis.php");
session_start();

if (isset($_POST['account'])) {
  $account = $_POST['account'];
  $passwd = $_POST['passwd'];
  $mysqli = new mysqli('參數IP', '帳號', '密碼', '資料庫');   // 連接資料庫
  $mysqli->set_charset('utf8');


  // 透過帳號去找密碼，就能比對是否符合
  $sql = 'SELECT id,account,passwd,name,icon,icontype FROM member WHERE account = ?';  // 如果帳號密碼正確，所以他一登入成功，就把他的資料都給他
  $stmt = $mysqli->prepare($sql);
  $stmt->bind_param('s', $account);
  $stmt->execute();
  $stmt->store_result();      // 把資料儲存起來
  if ($stmt->num_rows > 0) {    // 大於0 才符合
    $stmt->bind_result($id, $account, $hashpasswd, $name, $icon, $icontype);  // 綁定
    $stmt->fetch();
    if (password_verify($passwd, $hashpasswd)) {      // 登入成功
      //登入成功後去到主畫面
      $_SESSION['member'] = new Member(
        $id,
        $account,
        $hashpasswd,
        $name,
        $icon,
        $icontype
      );
      header('Location: main.php');
    }
  }
}

?>


<h1>Login</h1>
<hr>
<form method="post">
  Account: <input name="account"><br>
  Password: <input type="password" name="passwd"><br>
  <input type="submit" value="Login">
</form>