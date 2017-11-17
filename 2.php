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


        foreach($conn->query('SELECT * FROM user WHERE user_id= 2') as $row) {
          ?>
          <h1><?php echo $row['1'];?></h1>
          <h2> <?php echo $row['2'];?></h2>
          <h3>Age:<?php echo $row['3'];?></h3>
          <h4>Superpowers: <?php echo $row['4'];?>;</h4>
          <img src="<?php echo $row['5'];?>"/>
          <h5> Likes: <?php echo $row['6'];?></h5>
          <h5> Gifts: <?php echo $row['7'];?></h5>
          <a href="chooseGift1.php"> Send a gift </a>

        <?php } ?>
        <form action="" method="POST">
          <button>Like!</button>
        </form>

        <a href="profiles.php"> back to the profiles </a>
        <?php
        $sql = 'SELECT * FROM comments';
          $comments = $database->query($sql);
                ?>
                <form action="comment1.php">
                <label for="comment">Write a comment</label>
                <textarea name="comment"></textarea>
                <input type="submit" name="submit" value="comment">
                </form>
        <?php

        <?php
        foreach($conn->query('SELECT * FROM user WHERE user_id= 2') as $row) {
          ?>
          <p>Comments: <?php echo $row['8'];?></p>
      <?php
    } ?>
        <?php
          $conn->query("UPDATE user SET user_likes = user_likes + 1 WHERE user_id = 2");
        ?>


    </body>
    </html>
