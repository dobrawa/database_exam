<!DOCTYPE html>
<html>
<head>
	<title>processing</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php
	include('connection.php');
	$conn = new Database;
	$conn->connect();

  $sql = 'SELECT * FROM gifts';
  $gifts = $database->query($sql);
        ?>
				<form action="sendGift3.php" method="post">
          <label for="gift_name"> Pick a nice gift! </label>
            <select name="gift_name">
              <?php
                foreach ($gifts as $gift_name) {
              ?>
            <option value="<?php echo $gift_name['gift_name'];?>"><?php echo $gift_name['gift_name'];?>
             </option>
              <?php
                   }
               ?>
            </select>
            <input type="submit" name="submit" value="Add">
        </form>

</body>
</html>
