<?php
//  resource.php
include 'connect.php';
include 'header.php';

echo '<p><h2>Exam Resources</h2></p>';
echo '<p>You can upload resources or download files uploaded by your friends.</p>';

$sql = "SELECT `resrc_id`,
                `resrc_title`,
                `resrc_date`
            FROM 
                `resources`";
$result = mysql_query($sql);
if(!$result)
{
    echo "Resources could not be displayed, plese try again later".mysql_error();
}
else
{
    if(mysql_num_rows($result) == 0)
    {
        echo "No resources available";
    }
    else
    {
        echo "<table class>";
        echo "<tr><th align='center'>S.No</th>
                <th align='center'>Date</th>
                <th align='center'>Title</th></tr>";
        while($row = mysql_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td class='std'>";
            echo $row['resrc_id']."</td>";
            echo "<td class='leftpartTopic1'>";              //  Table cell
            echo "<p>Event</p><p>".date('d-m-Y',strtotime($row['resrc_date']));     //  Date
            echo "</td><td class='rightpartTopic1'>";        //  Table cell
            
            echo "<a href=download.php?id=".$row['resrc_id'].">".$row['resrc_title']."</a>";                       //  File name
            echo "</td></tr>";
        }
        echo "</table>";
    }
}
?>
<?php
    if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
    {
        echo '
            <div>
                <fieldset>
                    <legend>Upload</legend>
                <form action = "resource0.php" method = "post" enctype = "multipart/form-data">
                    <input type="text" name="fileName" placeholder="Filename">
                    <input type="file" name="userfile">
                    <input type="submit" name="submit">
                </form>
                </fieldset>
            </div>';
    }
    else
    {
        echo "<div id='btn'>
            <form action='signin.php'>
            <input type='submit' value='Log in to upload.'/>
            </form>
            </div>";
    }
?>

