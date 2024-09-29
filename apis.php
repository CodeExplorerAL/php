<?php
// 搭配 regex.php 使用
define('LETTERS', 'ABCDEFGHJKLMNPQRSTUVXYWZIO');



// function checkTWID($id)
// {
//   $isRight = false;
//   // echo strlen($id);
//   if (strlen($id) == 10) {
//     $c1 = substr($id, 0, 1);
//     $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
//     if (strpos($letters, $c1) !== false) {
//       $isRight = true;
//       $c2 = substr($id, 1, 1);
//       if ($c2 == '1' || $c2 == '2') {
//         //
//       }
//     }
//   }
// }



// function checkTWID($id)
// {
//   $isRight = false;
//   if (preg_match('/^[A-Z][12][0-9]{8}$/', $id)) {       // 開頭大寫英文 第二碼為數字1或2 接下來都是數字{}出現8次補上$說明結尾也是數字
//     $isRight = true;
//   }
//   return $isRight;
// }



// 身分證驗證法，可查公式
function checkTWID($id)
{
  if (preg_match('/^[A-Z][12][0-9]{8}$/', $id)) {
    $c1 = substr($id, 0, 1);
    $a12 = strpos(LETTERS, $c1) + 10;
    $a1 = (int)($a12 / 10);
    $a2 = $a12 % 10;
    $n1 = substr($id, 1, 1);
    $n2 = substr($id, 2, 1);
    $n3 = substr($id, 3, 1);
    $n4 = substr($id, 4, 1);
    $n5 = substr($id, 5, 1);
    $n6 = substr($id, 6, 1);
    $n7 = substr($id, 7, 1);
    $n8 = substr($id, 8, 1);
    $n9 = substr($id, 9, 1);

    $sum = $a1 * 1 + $a2 * 9 + $n1 * 8 + $n2 * 7 + $n3 * 6 + $n4 * 5 + $n5 * 4 + $n6 * 3 + $n7 * 2 + $n8 * 1 + $n9 * 1;
    $isRight = $sum % 10 == 0;
  }
  return $isRight;
}



// 身分證驗證法延伸功能 - 身份證字號產生器
function createTWIdByRandown()
{
  $area = substr(LETTERS, rand(0, 25), 1);
  return createTWIdByAreaCode($area);
}

function createTWIdByAreaCode($areaCode = 'A')
{
  $gender = rand(0, 1) == 0;
  return createTWIdByAreaCodeAndGender($areaCode, $gender);
}

function createTWIdByGender($gender = true)
{
  $area = substr(LETTERS, rand(0, 25), 1);
  return createTWIdByAreaCodeAndGender($area, $gender);
}

function createTWIdByAreaCodeAndGender($areaCode, $gender)
{
  $id = $areaCode;
  $id .= $gender ? '1' : '2';
  for ($i = 0; $i < 7; $i++) $id .= rand(0, 9);

  for ($i = 0; $i < 10; $i++) {
    if (checkTWID($id . $i)) {
      $id .= $i;
      break;
    }
  }

  return $id;
}






// 物件導向操作
class Student
{
  private $name, $ch, $eng, $math;    // 只能在這個類別內部使用，外部無法直接存取

  //建構式: 初始化屬性
  public function __construct($name, $ch, $eng, $math)
  {
    // 初始化
    $this->name = $name;
    $this->ch = $ch;
    $this->eng = $eng;
    $this->math = $math;
  }

  // 外部操作
  // 取得它的名字 return
  public function getName()
  {
    return $this->name;
  }
  // 計算總成績 return
  public function sum()
  {
    return $this->ch + $this->eng + $this->math;
  }
  // 取得平均數 return
  public function avg()
  {
    return $this->sum() / 3;
  }
  // 修改成績
  public function setMath($math)
  {
    $this->math =  $math;
  }
}

// 與檔案44 登入成功到主畫面有關，原生方法。朱老師會教magic神奇寫法，方便但效能沒有原生好

// 建構
class Member
{
  private $id, $account, $name, $passwd, $icon, $icontype;
  public function __construct($id, $account, $passwd, $name, $icon, $icontype)
  { // 有順序
    $this->id = $id;
    $this->account = $account;
    $this->name = $name;
    $this->passwd = $passwd;
    $this->icon = $icon;
    $this->icontype = $icontype;
  }
  // 針對命名屬性存取
  public function getId()
  {
    return $this->id;
  }
  public function getAccount()
  {
    return $this->account;
  }
  public function getName()
  {
    return $this->name;
  }
  public function getPasswd()
  {
    return $this->passwd;
  }
  public function getIcon()
  {
    return $this->icon;
  }
  public function getIcontype()
  {
    return $this->icontype;
  }
}
