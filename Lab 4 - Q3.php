<?php
$strAddress = $_SERVER["REMOTE_ADDR"];
$strBrowser = $_SERVER["HTTP_USER_AGENT"];
$strOs = $_ENV["OS"];
$strInfo = "$strAddress::$strBrowser::$strOs";

setcookie("AnotherCookie", $strInfo);
?>

<html>
<body>
<?php
echo "<p>Cookie Set</p>";
echo $_COOKIE["AnotherCookie"];
?>
</body>
</html>