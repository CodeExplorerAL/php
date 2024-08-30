<?php

// echo gettype($_GET);  // array
// var_dump($_GET);      // array(0) { }


// echo $_GET['x'];
// echo $_GET['y'];

$x = $_GET['x'];
$y = $_GET['y'];
$result = $x + $y;
echo "{$x} + {$y} = {$result}";
