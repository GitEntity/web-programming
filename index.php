<!DOCTYPE html>
<hr color="darkblue" size="20">
<h1 align="center"> Welcome to UOIT!</h1>
<hr color="darkblue" size="20">

<?php

$xyz = new DateTime ("now", new DateTimeZone('America/Toronto'));
echo $xyz -> format('m/d/Y, H:i:s');

?>

<hr color="darkblue" size="4">
<form action= "datastore.php" method= "post">
<p>
<label for= "strFirstName"> First Name: </label>
<input type= "text" name= "a" id= "strFirstName"></input>
</p>
<p>
<label for= "strLastName"> Last Name: </label>
<input type= "text" name= "b" id= "strLastName"></input>
</p>
<p>
<label for= "strUsername"> User Name: </label>
<input type= "text" name= "c" id= "strUserName"></input>
</p>
<p>
<label for= "$strPassword"> Password: </label>
<input type= "password" name= "d" id= "strPassword"></label>
</p>
<p>
<label for= "strPhoneNumber"> Phone Number: </label>
<input type= "text" name= "e" id= "strPhoneNumber"></label>
</p>
<p>
<input type= "submit" value= "Register">
</p>
</form>