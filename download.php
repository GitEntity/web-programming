<?php
    include 'connect.php';
    include 'header.php';
    $id = mysql_real_escape_string($_GET['id']);
    $sql = "SELECT resrc_content FROM resources WHERE resrc_id='$id'";
    
    $result = mysql_query($sql);                    //  Executing sql code
    if(!$result)
    {
        echo "Download failed";
    }
    else
    {
        while($row = mysql_fetch_assoc($result))
        {
            $content = $row["resrc_content"];           //  Retrieving data 
        }
        header("Content-type: application/pdf");					//	Data type = pdf
		header("Content-Disposition: attachment; filename='Download.pdf'");		//	Download
		
		print $content;
    }   
?>