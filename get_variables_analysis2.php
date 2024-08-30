<?php
$result = '';   // 在這加上空字串，讓span的undefine消除
$x = '';        // 在這加上空字串，讓第一個input的undefine消除
$y = '';        // 在這加上空字串，讓第二個input的undefine消除

// - isset() 用於檢查變量是否存在且不為 null，適合用來確保變量已經被設置。
// - filter_input() 用於接收外部的輸入數據（如 GET、POST、COOKIE 等）並進行驗證或過濾。
// - is_numeric() 用於檢查變量是否為數字或數字字符串。

if (isset($_GET['x']) && isset($_GET['y'])) {
  $x = filter_input(INPUT_GET, 'x', FILTER_VALIDATE_FLOAT);
  $y = filter_input(INPUT_GET, 'y', FILTER_VALIDATE_FLOAT);

  if (is_numeric($x) && is_numeric($y)) {
    $result = $x + $y;
    echo "{$x} + {$y} = {$result}";
  } else {
    $result = "請輸入有效的數字";
  }
}
?>

<!-- 想要做到輸入數字後數字不會消失，在input加上value -->
<!-- // - 避免 XSS 攻擊: 使用 htmlspecialchars() 函數來處理用戶輸入的顯示 -->
<form>
  <input name="x" value='<?php echo htmlspecialchars($x); ?>'>
  +
  <input name="y" value='<?php echo htmlspecialchars($y); ?>'>
  <input type="submit" value="=">
  <span><?php echo htmlspecialchars($result); ?></span>
</form>




<hr>

<!-- 進階版_加減乘除-->
<?php
$result = $x = $y = $op = '';

if (isset($_GET['x']) && isset($_GET['y'])) {
  $x = $_GET['x'];
  $y = $_GET['y'];
  $op = $_GET['op'];
  switch ($op) {
    case '1':
      $result = $x + $y;
      break;
    case '2':
      $result = $x - $y;
      break;
    case '3':
      $result = $x * $y;
      break;
    case '4':
      if ($y != 0) {
        $r1 = (int)($x / $y);
        $r2 = $x % $y;
        $result = "{$r1} ... {$r2}";
      } else {
        $result = "除數不能為零";
      }
      break;
  }
}

?>

<form>
  <input name="x" value="<?php echo $x; ?>">
  <select name="op">
    <option value="1" <?php echo $op = '1' ? 'selected' : ''; ?>>加</option>
    <option value="2" <?php echo $op = '2' ? 'selected' : ''; ?>>減</option>
    <option value="3" <?php echo $op = '3' ? 'selected' : ''; ?>>乘</option>
    <option value="4" <?php echo $op = '4' ? 'selected' : ''; ?>>除</option>
  </select>
  <input name="y" value="<?php echo $y; ?>">
  <input type="submit" value="=">
  <span><?php echo $result; ?></span>
</form>