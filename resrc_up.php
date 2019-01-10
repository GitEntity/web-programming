<?php
    //resrc_up.php
include 'connect.php';
if($_SERVER['REQUEST_METHOD']!= 'POST')
{
    echo 'This file cannot be called directly.';
}
else
{
    if($_FILE["content"]["size"]!=0)
    {
        $fileName = $_FILES['userfile']['name'];		//	File name
					$tmpName  = $_FILES['userfile']['tmp_name'];	//	File temporay location
					$fileSize = $_FILES['userfile']['size'];		//	File size
					$fileType = $_FILES['userfile']['type'];		//	File type

					$fp      = fopen($tmpName, 'r');				//	Opening file in read mode
					$content = fread($fp, filesize($tmpName));		//	Copy file content to $content
					$content = addslashes($content);
					fclose($fp);					//	File close

					if(!get_magic_quotes_gpc())
					{
						$fileName = addslashes($fileName);
					}
        
        $sql = "INSERT INTO resources()
                resrc_title,
                resrc_content,
                resrc_date,
                resrc_by)
            VALUES (".$fileName.",
                    ".$content.",
                    NOW(),
                    ".$_SESSION['user_id'].")";
        $result = mysql_query($sql);
        
        if(!result)
        {
            echo 'Submission failed, please try again!';
        }
        else
        {
            header("location: resoruces.php");
        }
    }
}
?>