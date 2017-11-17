<?php
session_start();
$user_name = $_POST['name'];
$user_age = $_POST['age'];
$user_gender = $_POST['gender'];
$user_powers = $_POST['superpowers'];
$user_picture = $_POST['picture'];

$_SESSION["user_name"] = $user_name;
$_SESSION["user_gender"] = $user_gender;
$_SESSION["user_age"] = $user_age;
$_SESSION["user_powers"] = $user_powers;
$_SESSION["user_picture"] = $user_picture;

    //connection with PDO to database
    $servername = "localhost";
    $username = "root";
    $password = "imgroot324";
    try
    {
        //SETUP connection
        $conn = new PDO("mysql:host=$servername;dbname=superheroes", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare ("UPDATE user SET user_likes = user_likes +1 WHERE user_id= 1");
        }

    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }

   header("Location: profiles.php");
   exit;
?>
