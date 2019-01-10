<html>
<body>
<?php
$strReadCookie = $_COOKIE["AnotherCookie"];
$arrList = explode ("::", $strReadCookie);

echo "<p>IP Address: $arrList[0]</p>";
echo "<p>Client Browser: $arrList[1]</p>";
echo "<p>Operating System: $arrList[2]</p>";
?>
</body>
</html>