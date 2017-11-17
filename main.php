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
      ?> 
        <?php
        echo "Awesome, " . $_SESSION["user_name"]. "! Time to check out the others.";
        ?>
        <h1> Your profile: </h1>
        <h2>Name:<?php echo $_SESSION["user_name"];?></h2>
        <h3>Age: <?php echo $_SESSION["user_age"];?> </h3>
        <h3>Gender: <?php echo $_SESSION["user_gender"];?> </h3>
        <h4>Powers: <?php echo $_SESSION["user_powers"];?> </h4>
        <img src="<?php echo $_SESSION["user_picture"];?>"/>

        <a href="profiles.php"> Click to view the profiles </a>

        <form action="update.php" method="POST" enctype="multipart/form-data">
            Name:<br>
            <input id="user_name" type="text" name="name" >
            <br>
            Age:<br>
            <input id="user_age" type="text" name="age" >
            <br>
            Gender:<br>
            <input id="user_gender" type="text" name="gender" >
            <br>
            Superpowers:<br>
            <input id="user_powers" type="text" name="superpowers" >
            <br>
            Your photo:<br>
            <input id="user_picture" type="text" name="picture" >
            <br>
            <input type="submit" value="Submit">
        </form>



    </body>
</html>
