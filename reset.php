<?php
include "connect.php";
include "header.php";
?>
<h3>Reset Password</h3>
<div class="login">
    <form action='<?php echo $_SERVER["PHP_SELF"];?>' method="post">
        <table>
            <tr>
                <td>username</td>
                <td><input type="text" name="user_name" placeholder="username"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="user_email"></td>
            </tr>
             <tr>
                <td>New Password</td>
                <td><input type="password" name="user_pass0"></td>
            </tr>
            <tr>
                <td>Re-enter</td>
                <td><input type="password" name="user_pass1"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Reset"></td>
            </tr>
        </table>
</div>
<div>
<div id="reset">
<?php
    
    if(isset($_POST["submit"]))
    {
        if($_POST["user_pass0"] == $_POST["user_pass1"])
        {
            if(!isset($_POST['user_name']))
        {
            $errors[] = 'The username field must not be empty.';
        }
         
        if(!isset($_POST['user_email']))
        {
            $errors[] = 'The password field must not be empty.';
        }
         
        if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
        {
            echo 'Uh-oh.. a couple of fields are not filled in correctly..';
            echo '<ul>';
            foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
            {
                echo '<li>' . $value . '</li>'; /* this generates a nice error list */
            }
            echo '</ul>';
        }
        else
        {
            $sql = "SELECT 
                        user_name,
                        user_email
                    FROM
                        users
                    WHERE
                        user_name = '" . mysql_real_escape_string($_POST['user_name']) . "'
                    AND
                        user_email = '" . $_POST['user_email'] . "'";
            
            $result = mysql_query($sql);
            if(!$result)
            {
                //something went wrong, display the error
                echo 'Something went wrong while resetting. Please try again later.';
                //echo mysql_error(); //debugging purposes, uncomment when needed
            }
            else
            {
                //the query was successfully executed, there are 2 possibilities
                //1. the query returned data, the user can be reset
                //2. the query returned an empty result set, the credentials were wrong
                if(mysql_num_rows($result) == 0)
                {
                    echo 'You have supplied a wrong user/email combination. Please <a href="reset.php">try again.</a>';
                }
                else
                {
                    $sql = "UPDATE users SET `user_pass`='".sha1($_POST['user_pass0'])."' WHERE `user_name`='".$_POST['user_name']."'";
                    $result = mysql_query($sql);
                    if(!$result)
                    {
                        echo "Reset failed, <a href ='reset.php'>try Again</a>";
                    }
                    else
                    {
                        echo "Your password has been reset!";
                    }
                }
            }
        }
            
        }
        else
        {
            echo "Passwords does not match!";
        }
    }
?>
    </div>