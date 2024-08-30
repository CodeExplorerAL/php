<?php

// ! false：0｜0.0｜""（空字串）｜"0"（字串零）｜NULL｜FALSE 。
// ! true：其他所有值。
// $a = true;         // OO
// $a = false;        // XX

// $a = 1;            // OO
// $a = -1;           // OO
// $a = 1.234;        // OO

// $a = '';           // XX
// $a = 0;            // XX
// $a = '0';          // XX
// $a = '00';         // OO
// $a = 'OK';         // OO

// if ($a) {
//   echo 'OO';
// } else {
//   echo 'XX';
// }

?>

<?php
$a = 0;         // ==(OO) | ===(OO)
// $a = '0';    // ==(OO) | ===(XX)

// ! 兩個等號永遠做值的比對 ｜ 三個等號會做型別的比對
if ($a == 0) {
  // if ($a === 0) {
  echo 'OO';
} else {
  echo 'XX';
}
?>