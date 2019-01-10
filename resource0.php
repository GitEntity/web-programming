<?php
    include 'connect.php';
    include 'header.php';
    if($_SERVER["REQUEST_METHOD"]!="POST")
    {
        echo "<h3>This file cannot be called directly!</h3>";
    }
    else
    {
        if($_FILES['userfile']['size']!=0)
        {
            $fileName = $_POST['fileName'];             //  Filename
            $tmpName = $_FILES['userfile']['tmp_name'];         //  File temporary location
            $fileSize = $_FILES['userfile']['size'];             //  File size
            $fileType = $_FILES['userfile']['type'];             //  File type
            
            $fp = fopen($tmpName,'r');                          //  Opening file in read mode
            $content = fread($fp,filesize($tmpName));           //  Copying file content
            
            $content = addslashes($content);
            fclose($fp);                                        //  File close
            if(!get_magic_quotes_gpc())
            {
                $fileName = addslashes($fileName);
            }
            $sql = "INSERT INTO resources (
                            resrc_title,
                            resrc_content,
                            resrc_date,
                            resrc_by)
                        VALUES(
                            '$fileName',
                            '$content',
                            NOW(),
                            " . $_SESSION['user_id'] . ")";
            $result = mysql_query($sql);
            if($result)
            {
                header("location: resource.php");
            }
            else
            {
                echo "Upload Failed!, please <a href='resource.php'>try again</>";
            }
        }
    }

?>