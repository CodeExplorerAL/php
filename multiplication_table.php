<!-- for迴圈_九九乘法表 -->
<table border="1" width="100%">
  <?php
  for ($i = 0; $i < 3; $i++) {                  // 列
    echo "<tr />";
    for ($j = 1; $j < 4; $j++) {                // 欄
      echo "<td />";
      $newj = $j + $i * 3;
      for ($k = 1; $k <= 9; $k++) {             // 乘1~9
        $r = $newj * $k;
        echo "{$newj} * {$k} = $r <br />";
      }
    }
  }
  ?>
</table>


<?php
// 初始化變數
$start = 1;
$rows = 1;
$cols = 1;

// 檢查表單是否提交
if (isset($_GET['start'])) {

  // 更新變數值
  $start = htmlspecialchars($_GET['start']);
  $rows = htmlspecialchars($_GET['rows']);
  $cols = htmlspecialchars($_GET['cols']);
}
?>

<h1>九九乘法表</h1>
<hr />
<form method="get">
  Start: <input type="number" name="start" max="9" value="<?php echo $start; ?>">
  Rows: <input type="number" name="rows" min="1" max="3" value="<?php echo $rows; ?>">
  Cols: <input type="number" name="cols" value="<?php echo $cols; ?>">
  <input type="submit" value="go">
</form>
<hr />


<!-- 使用定義define()_九九乘法表 -->
<table border="1" width="100%">
  <?php

  // 使用定義
  // define('ROWS', 3);
  // define('COLS', 3);
  // define('START', 1);

  // 使用變數
  define('ROWS', $rows);
  define('COLS', $cols);
  define('START', $start);

  for ($i = 0; $i < ROWS; $i++) {
    echo '<tr />';
    for ($j = START; $j <= START + COLS - 1; $j++) {
      $newj = $j + $i * COLS;
      echo '<td />';
      for ($k = 1; $k <= 9; $k++) {
        $r = $newj * $k;
        echo "{$newj} * {$k} = {$r}<br />";
      }
    }
  }

  ?>
</table>