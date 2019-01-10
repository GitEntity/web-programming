<?php
//create_cat.php
include 'connect.php';
include 'header.php';
 
echo '<h2>Create a Category</h2>';
if(!isset($_SESSION['signed_in']))
{
    //the user is not signed in
    echo 'Sorry, you have to be <a href="signin.php">signed in</a> to create a topic.';
}
else
{
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		//the form hasn't been posted yet, display it
		if($_SESSION['user_level']==1)
		{
			echo "Welcome back Admin!";
			echo "<form method='post' action=''>
			<table>
			<tr>
				<td>Category name:</td> 
				<td><input type='text' name='cat_name' /></td>
			</tr>
			<tr>
				<td>Category description:</td> 
				<td><textarea name='cat_description' rows='5' cols='50'/></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type='submit' value='Add category' /></td>
			</tr>
			</table>
		 </form>";
		}
		else
		{
			echo "Only Admins can create Category!";
		}
	}
	else
	{
		$cat_name = mysql_real_escape_string($_POST["cat_name"]);
		$cat_description = mysql_real_escape_string($_POST["cat_description"]); 
		//the form has been posted, so save it
		$sql = "INSERT INTO categories(`cat_name`, `cat_description`)
				VALUES('$cat_name','$cat_description')";
		$result = mysql_query($sql);
		if(!$result)
		{
			//something went wrong, display the error
			echo 'Error' . mysql_error();
		}
		else
		{
			echo 'New category successfully added.';
		}
	}
}
?>