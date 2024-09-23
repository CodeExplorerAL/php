<?php
// 定義
class Bike
{
  // var $speed = 0;     // 未附值前=> NULL，附值後(= 0)宣告初始值 int(0)

  // 物件屬性 -> 要有物件才有的屬性
  // private $speed = 0;     // 玩玩加速到10之後來到這邊
  protected $speed;     // 玩摩托車來到這邊

  // 建構式/子/方法
  function __construct()
  {                               // 建議將初始化寫在建構式裡面
    $this->speed = 0;
  }

  // 物件方法 -> 有物件才有的方法
  function upSpeed()
  {             // 設計階段 -> 加速度方法
    $this->speed = $this->speed < 1 ? 1 : $this->speed * 1.4;  //  設計速度
  }
  function downSpeed()
  {           // 設計階段 -> 減速度方法
    $this->speed = $this->speed < 1 ? 0 : $this->speed * 0.7;  //  設計速度
  }
  function getspeed()
  {        // 玩玩加速到10之後來到這邊 得到速度 
    return $this->speed;
  }
}

// 設計題目: 摩托車 
class Scooter extends Bike
{
  private $gear;

  function __construct()
  {        // 設定初始化
    $this->gear = 0;
  }
  function upSpeed()
  {
    $this->speed = $this->speed < 1 ? 1 : $this->speed * 1.4 * $this->gear;
  }
  function changeGear($gear)
  {     // 想換檔
    if ($gear >= 0 && $gear <= 4) {
      $this->gear = $gear;
    }
  }
}

// 開始玩
$myBike = new Bike();  // new為建立一個新物件; 等號=指派給前面的變數 ; 後面等下再說
// var_dump($myBike);   // 看看 object(bike)#1 (1) { ["speed"]=> NULL }
// $myBike->speed = 123;     // 了解就好
$myBike->upSpeed();
$myBike->upSpeed();
$myBike->upSpeed();
$myBike->upSpeed(); // 玩玩看 增速或減速 // 速度2.744 
// echo $myBike->speed;    // 123

// 老師延伸 增加速度到10以上
// 我的用法
// for($i= 0; $i< 8; $i++){    
//     $myBike->upSpeed();
// }
// 老師的用法 -> 外部存取速度
// $myBike->speed = 10.1;  // 老師故意用不合理的現象，因為沒有一台腳踏車你說要速率10就是10

// echo $myBike->speed;
echo $myBike->getspeed();     // 玩玩加速到10之後來到這邊 速度掌握在類別設計中 0 不會失控變負數

// 摩托車
echo '<hr>';
$myScooter = new Scooter();
$myScooter->changeGear(4);      // 在這換檔
$myScooter->upSpeed();
$myScooter->upSpeed();
$myScooter->upSpeed();
$myScooter->upSpeed();
echo $myScooter->getspeed();
