<!-- 簡單款 -->
<?php
$score = rand(0, 100);
echo $score . '<hr />';

if ($score > 60) {
  echo '通過測驗';
} else {
  echo '需補考';
}
?>

<hr />

<!-- 90分以上印出A 80分以上印出B  70分以上印出C  60分以上印出D  其他分數印出E  -->
<?php
$score = rand(0, 100);
echo $score . '<hr />';
if ($score >= 90) {
  echo 'A';
} else {
  if ($score >= 80) {
    echo 'B';
  } else {
    if ($score >= 70) {
      echo 'C';
    } else {
      if ($score >= 60) {
        echo 'D';
      } else {
        echo 'E';
      }
    }
  }
}
?>

<hr />

<!-- 縮減，else if演變而來的過程-->
<?php
$score = rand(0, 100);
echo $score . '<hr />';

if ($score >= 90) {
  echo 'A';
} else if ($score >= 80) {
  echo 'B';
} else if ($score >= 70) {
  echo 'C';
} else if ($score >= 60) {
  echo 'D';
} else {
  echo 'E';
}
?>

<hr />

<!-- 今年是不是閏年 -->
<?php
$year = 1000;

if ($year % 4 == 0) {
  if ($year % 100 == 0) {
    if ($year % 400 == 0) {
      echo "29"; // 閏
    } else {
      echo "28"; // 不閏
    }
  } else {
    echo "29"; // 閏
  }
} else {
  echo "28"; // 不閏
}


?>