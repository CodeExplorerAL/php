<?php
include("apis.php");
session_start();
if (!isset($_SESSION["member"])) header('location: login.php');
$member = $_SESSION['member'];
?>

<h1>AAA Company</h1>
<hr>
Main Page
<hr>
Hello, <?php echo $member->getName(); ?>
<!-- 登入 -->
<img src='data:image/jpeg; base64, <?php echo base64_encode($member->getIcon()); ?>'>
<!-- 登出 -->
<a href="logout.php">Logout</a>