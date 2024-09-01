<?php
// var_dump($_GET);       // array(0) { }
// var_dump($_SERVER);    // array(41) { ["UNIQUE_ID"]=>... 太長了，改用foreach
foreach ($_SERVER as $k => $v) {
  echo "{$k}:{$v}<br />";
}
