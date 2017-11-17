<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('connection.php');
        $conn = new Database;
        $conn->connect();
        $sql = "UPDATE user SET comment_content = ? WHERE user_id = 1";
        $values = array(
        		$_POST['comment']
        	);
          $conn->prepared($sql,$values);
        ?>
<p>Comment posted!
	<a href="profiles.php">Back to profiles</a>
</p>
    </body>
    </html>
