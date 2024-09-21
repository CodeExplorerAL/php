<?php
// 查看影像處理是否開啟
// $info = gd_info();
// foreach ($info as $k => $v) {
//   echo "{$k} = {$v}<br />";
// }



// 開始作畫
// $rate = 0;                    // 50%
// if (isset($_GET['rate']))

//   $rate = $_GET['rate'];        // 可直接在URL修改值 像這樣 brad23.php?rate=87

// $img = Imagecreate(400, 20);  // 變數大小寫嚴格區分 ; 方法function沒有一定
// // var_dump($img);               // object(GdImage)#1 (0) { }

// $yellow = imagecolorallocate($img, 255, 255, 0);
// $red = imagecolorallocate($img, 255, 0, 0);
// imagefilledrectangle($img, 0, 0, 400, 20, $yellow);
// imagefilledrectangle($img, 0, 0, (int)(400 * $rate / 100), 20, $red);

// header('content-type:image/jpeg');   // html 沒有區分大小寫
// imagejpeg($img);                      // 輸出

// imagedestroy($img);



// 圖片
$img = imagecreatefromjpeg('imgs/coffee.jpg');
// 圖片網址
// $img = imagecreatefromjpeg('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSthmiYDBtkuV-KembFN3cFKWUrIdrauxyKUl-o99G2nSG5fC1bxDmBEsKSz5lKgQ6rZkU&usqp=CAU');

$blue = imagecolorallocate($img, 0, 0, 255);
imagettftext($img, 20, 20, 50, 150, $blue, 'fonts/NotoSerifTC-Bold.otf', '測試');

// 瀏覽器輸出
header('content-type: image/jpeg');
imagejpeg($img);

// // 另存新檔
imagejpeg($img, 'imgs/A.jpg');

imagedestroy($img);
