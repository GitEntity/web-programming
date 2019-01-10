<?php
session_start();

if (!$_SESSION["intCount"])
	$_SESSION["intCount"] = 1;
else
	$_SESSION["intCount"]++;
?>

<html>
<body>
<hr size=20 color=orange>
<h1 align=center>SOFE-2800U - Web Programming</h1>
<hr size=20 color=darkgreen>

<?php
echo "<p>You have accessed this page ".$_SESSION["intCount"]." times.</p>";
?>
</body>
</html>