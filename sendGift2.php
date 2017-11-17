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


	// First, prepare the SQL
	$sql = "UPDATE user SET gift_name = ? WHERE user_id = 2";

	// Secondly, add values
	$values = array(
		$_POST['gift_name']
	);
	// Call prepared function to execute the above
  $conn->prepared($sql,$values);;
?>

<p>Gift has been sent!
	<a href="profiles.php" class="notice">Back to Profiles</a>
</p>
</body>
</html>
