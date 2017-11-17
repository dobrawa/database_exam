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

        foreach($conn->query('SELECT * FROM user WHERE user_id= 1') as $row) {
          ?>
          <h1><?php echo $row['1'];?></h1>
          <img src="<?php echo $row['5'];?>"/>
          <a href="1.php"> View profile </a>
        <?php
      }
        foreach($conn->query('SELECT * FROM user WHERE user_id= 2') as $row) {
          ?>
          <h1><?php echo $row['1'];?></h1>
          <img src="<?php echo $row['5'];?>"/>
          <a href="2.php"> View profile </a>
        <?php
      }
        foreach($conn->query('SELECT * FROM user WHERE user_id= 3') as $row) {
          ?>
          <h1><?php echo $row['1'];?></h1>
          <img src="<?php echo $row['5'];?>"/>
          <a href="3.php"> View profile </a>
        <?php }

        foreach($conn->query('SELECT * FROM user WHERE user_id= 4') as $row) {
          ?>
          <h1><?php echo $row['1'];?></h1>
          <img src="<?php echo $row['5'];?>"/>
          <a href="4.php"> View profile </a>
        <?php }
        ?>






    </body>
</html>
