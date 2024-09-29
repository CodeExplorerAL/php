<?php
session_start();

// 移除session的兩種方法
// unset($_SESSION['rand']) ; // 拿掉session
session_destroy(); // 摧毀所有session   ，再返回檔案2會有錯誤，因為已經被摧毀
