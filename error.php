<?php
// $hobby = $_GET['hobby'];
// var_dump($hobby);
?>



<?php
// $upload = $_FILES['upload'];
// var_dump($upload);
// 可以上傳檔案去看看會得出甚麼結果，會是陣列但內容可以了解它會輸出什麼
// error 為0是成功，非0是失敗，未提供資料就傳送會看到int(4) ["size"]
// foreach ($upload as $key => $value) {   // 我們來檢視它因為它是陣列
//   echo "{$key} : {$value}<br>";
// }

// if ($upload['error'] == 0) {
//   if (move_uploaded_file($upload['tmp_name'], "upload/{$upload['name']}")) {     // (來源在哪裡,移到哪裡去)
//     echo 'success';
//   } else {
//     echo 'failure(1)';
//   }
// } else {
//   echo 'failure(2)';
// }
?>



<?php
$upload = $_FILES['upload'];
// var_dump($upload);

foreach ($upload['error'] as $k => $v) {
  if ($v == 0) {
    move_uploaded_file(
      $upload['tmp_name'][$k],
      "upload/{$upload['name'][$k]}"
    );
  }
}
?>