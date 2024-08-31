<?php
$result = '';
$x = '';
$y = '';

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

<form>
  <input name="x" value='<?php echo htmlspecialchars($x); ?>'>
  +
  <input name="y" value='<?php echo htmlspecialchars($y); ?>'>
  <input type="submit" value="=">
  <span><?php echo htmlspecialchars($result); ?></span>
</form>


<hr>


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