<?php
//  topic.php
include 'connect.php';
include 'header.php';

class _Topic
{
    public function __constructor()
    {
        
    }
    public function displayTopic()
    {
        $id = mysql_real_escape_string($_GET['id']);
    $sql =  "SELECT 
                `topic_id`, 
                `topic_subject`
            From 
                topics
            WHERE
                topic_id='$id'";
    
    $result = mysql_query($sql);
    
    if(!$result)
    {
        echo 'THE post could not be displayed, please try again later.' .mysql_error();
    }
    else
    {
        if(mysql_num_rows($result) == 0)
        {
            echo "This topic does not exists.";
        }
        else
        {
            //  display topic data.
            echo "<table>";
            while($row = mysql_fetch_assoc($result))
            {
                echo "<tr><th align ='center' colspan='2'>".$row['topic_subject']."                            </th></tr>";
            }
            
            //  do query on posts
            $sql = "SELECT
                        post_topic,
                        post_content,
                        post_by,
                        post_date,
                        user_id,
                        user_name
                    FROM
                        posts
                    LEFT JOIN
                        users
                    ON
                        posts.post_by = users.user_id
                    WHERE
                        posts.post_topic ='$id'";
            $result = mysql_query($sql);
            
            if(!$result)
            {
                echo 'The posts could not be displayed, please try again later.';
            }
            else
            {
                if(mysql_num_rows($result) == 0)
                {
                    echo "There is no posts on this topic.";
                }
                else
                {
                    //  Display posts
                    while($row = mysql_fetch_assoc($result))
                    {
                        echo '<tr>';
                        echo '<td class = "leftpartTopic">';
                        echo '<p>Event</p><p>'.date('d-m-Y',strtotime($row['post_date']));
                        echo '</td><td class="rightpartTopic">';
                        echo $row['post_content'];
                        echo '</td></tr>';
                    }   
                }
            }
            echo '</table>';
        }
    }
    }
        public function replyPost()
        {
            if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
            {
               echo '<div class = "reply">';
            echo '<p><h3>Reply:</h3></p>';

                echo '<form method="post" action="reply.php?id='.$_GET["id"].'" enctype = "multipart/form-data" >';
                    echo "<textarea name='reply-content' rows='1' cols='50'/ placeholder='Reply...'></textarea>";
                        echo "<p><input type='submit' name = 'submit' value='Submit Reply'/></p>";
                        echo "</form>";
            }

            else
            {
                echo "<div id='btn'>
                        <form action='signin.php'>
                        <input type='submit' value='Log in to post replies.'/>
                        </form>
                        </div>";
            }
        }
}
$topic = new _Topic();
$topic -> displayTopic();
$topic -> replyPost();

include 'footer.php';
?>