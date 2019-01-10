<?php
setcookie("test_cookie", "test",time() + 3600, "/");
?>
<html>
<body>
<hr size=20 color=orange>
<h1 align=center> Web Programming - SOFE 2800U </h1>
<hr size=20 color=darkblue>
<?php
$name = "SOFE-2800U";
$value = "Web Programming";
setcookie($name, $value, time() + (60*60));
if (!isset($_COOKIE[$name]))
{
	echo "Cookie named: ".$name." is not set!";
}
else
{
	echo "Cookie: ".$name." is set!<br>";
	echo "Value is: ".$_COOKIE[$name];
}
?>
<?php setcookie("SOFE-2800U"); ?>
