<?php
session_start();

if (!$_SESSION["intCount1"])
	$_SESSION["intCount1"] = 1;
else
	$_SESSION["intCount1"]++;
?>

<html>
<body>
<hr size=20 color=orange>
<h1 align=center>SOFE-2800U - Web Programming</h1>
<hr size=20 color=darkgreen>

<?php
echo "<p>You have accessed this page ".$_SESSION["intCount1"]." times.</p>";
?>
</body>
</html>