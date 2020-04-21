<?php
$im = imagecreate(70, 20);
$background_color = imagecolorallocate($im, 0, 0, 0);
$text_color = imagecolorallocate($im, 233, 14, 91);
$str = rand(1000,9999);
$_SESSION['captcha'] = md5($str);
imagestring($im, 5, 7, 8,  $str, $text_color);
imagegif($im,'public/images/file.gif');