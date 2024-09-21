<?php
// 引入 apis.php
include('apis.php');

if (checkTWID('A123456789')) {
  echo 'OK';
} else {
  echo 'XX';
}

echo '<hr>';

// 產生器用 共4招
echo createTWIdByRandown() . '<br>';
echo createTWIdByAreaCode('B') . '<br>';
echo createTWIdByGender('true') . '<br>';
echo createTWIdByAreaCodeAndGender('Y', true) . '<br>';
