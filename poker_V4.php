<!-- 洗牌方法4 -->
<?php
$poker = range(0, 51);
// var_dump($poker);    // 可以看出0~51都有出現

// 做交換動作
shuffle($poker);

// 檢查是否重複
// foreach ($poker as $k => $v) {
//   echo "[{$k}] = {$v}<br>";
// }
?>


<!-- 發牌給4個玩家 -->
<?php
$players = [[], [], [], []];        // 二維陣列
foreach ($poker as $i => $card) {
  // $players[家][張] = $card;
  $players[$i % 4][(int)$i / 4] = $card;
}

// 測試看看有沒有把牌發給4個玩家
foreach ($players[0] as $card) {      // 看index就不看value了 ，所以沒有這個=>
  echo "{$card}<br>";
}
?>


<!-- 理牌 -->
<table border="1" width="100%">
  <?php
  // 花色
  $launchs = [
    '<font color = black>&spades;',
    '<font color = red>&hearts;',
    '<font color = red>&diams;',
    '<font color = black>&clubs;'
  ];
  $values = ['A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K'];     // 牌面

  foreach ($players as $player) {     // players 是全部家 player為各家
    sort($player);                    // 將牌排序 
    echo '<tr />';

    foreach ($player as $card) {
      echo "<td>{$card}</td>";                         // 檢查用
      // $launch = $launchs[(int)($card / 13)];        // 花色
      // $value = $values[$card % 13];                 // 牌面
      // echo "<td>{$launch}{$value}</font></td>";   
    }
  }

  ?>
</table>

&spades; 黑桃
&hearts; 紅心
&diams; 菱形
&clubs; 梅花