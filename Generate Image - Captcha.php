<?php
// start a new session
session_start();

// define variables
$code = rand(1000, 99999);	// generate random Captcha #
$_SESSION["code"] = $code;	// new Captcha for every session
$im = imagecreatetruecolor(50, 24);
$bg = imagecolorallocate($im, 22, 86, 165);	  // background color (blue)
$fg = imagecolorallocate($im, 255, 255, 255);	// foreground/text color (white)

// set image properties
imagefill($im, 0, 0, $bg);
imagestring($im, 5, 5, 5, $code, $fg);
header("Cache-Control: no-cache, must-revalidate");
header("Content-type: image/png");
imagepng($im);
imagedestroy($im);	// destroy image for session
?>