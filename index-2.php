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
        <h1> Welcome! Update your profile to continue. </h1>
        <form action="insert.php" method="POST" enctype="multipart/form-data">
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
