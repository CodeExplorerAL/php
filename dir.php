<?php
// 一般狀況 
// $dir = opendir('c:\test1');  

// 死翹翹或離開
// $dir = @opendir('c:\test2') or die('Server Busy');         
// $dir = @opendir('c:\test2') or exit('Server Busy');         
// var_dump($dir);  


// $dir = @opendir('c:\test1') or exit('Server Busy');

// $data = readdir($dir);
// echo $data . '<br>';

// $data = readdir($dir);
// echo $data . '<br>';

// $data = readdir($dir);
// echo $data . '<br>';

// $data = readdir($dir);
// echo $data . '<br>';

// closedir($dir);

?>


<?php // 讀該資料夾的所有內容    

// $dir = @opendir('c:\test1') or exit('Server Busy');

// $dir = @opendir('.') or exit('Server Busy');

// while ($data = readdir($dir)) {
//   echo "{$data}<br>";
// }

// closedir($dir);

?>


<?php // 取得檔案大小
// date_default_timezone_set('Asia/Taipei');
// $dir = '.';
// $fp = opendir($dir);
?>
<!-- 
<table border='1' width=100>
  <tr>
    <th>Filename</th>
    <th>Type</th>
    <th>Files</th>
    <th>Datetime</th>
  </tr> -->

<?php
// while ($file = readdir($fp)) {
//   $fullname = "{$dir}/{$file}";
//     echo '<tr>';
//     echo "<td>{$file}</td>";

//     if (is_dir($fullname)) {
//       echo "<td>Directory</td>";
//     } else if (is_file($fullname)) {
//       echo "<td>File</td>";
//     } else {
//       echo "<td>Unknown</td>";
//     }

//     echo "<td align='right'>" . filesize($fullname) . "bytes</td>";
//     $mtime = date("y-m-d H:i:s", filemtime($fullname));
//     echo "<td align='center'>" . $mtime . "</td>";
//     echo '</tr>';
//   }
?>
<!-- </table> -->



<?php // 寫入檔案1
// $data = "Hello World\n1234567\n7654321\nabcdefg";   // 單引號無法換列

// // $fp =  fopen('dir1/file1.txt', 'w');  // 一開始寫r+ 會報錯，因為沒有這個檔案，所以要先用w(檔案即使不在也會試圖建立檔案)，mac需要將資料夾改可寫權限
// $fp =  fopen('dir1/file1.txt', 'r+'); // 配合下方 

// fwrite($fp, $data);
// fwrite($fp, 'AA');  // 有資料的情況下去寫，原來的會都給它清掉 -> 重寫
// // // fwrite($fp, $data);     // 又回來了
// fwrite($fp, 'AA');  // 配合上方這時將w改成r+，可以發現不會覆蓋，而是合在一起


// fflush($fp); // close之前衝一下，把資料衝出來
// fclose($fp);

?>


<?php  // 寫入檔案2
// $dir = 'dir2/dir3/dir4';       // 先確認 檔案在不在
// if (!file_exists($dir)) {       // file_exists -> 可看成 file or directory
//   mkdir($dir, 0777, true);
// }

// $data = "Hello World\n1234567\n7654321\nabcdefg";
// $fp =  fopen("{$dir}/file1.txt", 'a');
// fwrite($fp, "BB\n");
// fflush($fp);
// fclose($fp);
?>



<?php   // 危險行為
// $filename = $_GET['filename'];
// $data = $_GET['data'];

// $fp = fopen("dir1/{$filename}", 'w');
// fwrite($fp, $data);
// fflush($fp);
// fclose($fp);

// header("location: dir1/{$filename}");
?>


<?php // 讀取 CSV 檔
$fp = fopen('dir1/ns1hosp.csv', 'r');    // 讀取檔案
// $line = fgets($fp);                     // 可看出 讀取第一行
// echo $line . '<br>';

// $line = fgets($fp);                     // 可看出 讀取第二行
// echo $line . '<br>';

// while ($line = fgets($fp)) {                 // 全部讀出來
//   echo $line . '<br>';
// }

// fgets($fp);                                  // 如果不想要標題列，可以加入這行，意思是先執行一次
// while ($line = fgets($fp)) {                 // 延伸題目，只要醫院、地址和電話欄位就好     ->  拆減/分割
//   $row = explode(',', $line);
//   echo "{$row[2]}:{$row[4]}:{$row[7]}<br>";
// }

// fclose($fp);
?>


<?php   // fgetcsv 省掉切割字串
// $fp = fopen('dir1/ns1hosp.csv', 'r');
// fgets($fp);
// while ($row = fgetcsv($fp)) {
//   echo "{$row[1]}:$row[2]}:{$row[4]}:{$row[7]}<br>";
// }
// fclose($fp);
?>



<?php   // JSON 格式
$json = file_get_contents('https://data.moa.gov.tw/Service/OpenData/ODwsv/ODwsvAgriculturalProduce.aspx');
// echo $json;                       // 一般json格式應該是這樣才對，農委會的是有整理過的

$data = json_decode($json);    // decode解碼 把字串變為物件 ; encode編碼
// var_dump($data);              // 解出array 第X筆為物件

foreach ($data as $v) {      // $k沒啥好看的價值，老師就不看它了
  echo "{$v->Name}<br>";
}


?>