</div><!-- content -->
</div><!-- wrapper -->
<div id="footer">Group-13</div>
<html>
<div style="height:5%; width:5%;">

<a href="RSS.xml">

	<img src="rss.png" 
	style="position:absolute; 
	height="25" 
	width="25"
	float:right; 
	right:0px; 
	bottom:0px; 
	z-index:2;">

</a>

</div>
</html>
</body>
</html>

<?php
//setcookie("test_cookie", "test",time() + 3600, "/");
$name = "forum_cookie";
$value = "cookie_value";
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