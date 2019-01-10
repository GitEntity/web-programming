<?php
		session_start();
			if(isset($_SESSION["signed_in"]))
			{
				echo 'Hello' . $_SESSION['user_name'] . '. Not you? <a href="signout.php">Sign out</a>';
			}
			else
			{
				echo '<a href="signin.php">Sign in</a> or <a href="sign up">create an account</a>.';
				
			}
		?>