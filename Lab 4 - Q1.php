<?php
setcookie("test_cookie", "test",time() + 3600, "/");
?>
<html>
<body>
<hr size=20 color=orange>
<h1 align=center> Web Programming - SOFE 2800U </h1>
<hr size=20 color=darkblue>
<?php
if (count($_COOKIE) > 0)
{
	echo "Cookies are enabled.";
}
else
{
	echo "Cookies are disabled.";
}
?>

</body>
</html>
