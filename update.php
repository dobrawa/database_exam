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
        $stmt = $conn->prepare("SELECT * FROM user");
        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':user_gender', $user_gender);
        $stmt->bindParam(':user_age', $user_age);
        $stmt->bindParam(':user_powers', $user_powers);
        $stmt->bindParam(':user_picture', $user_picture);
        $stmt->execute();
        }

      catch(PDOException $e)
      {
          echo "Connection failed: " . $e->getMessage();
      }

    $stmt = "UPDATE user SET
                        user_name = ?,
                        user_age = ?,
                        user_gender = ?,
                        user_powers = ?,
                        user_picture = ?,
                        WHERE user_id = 4 ";
    $values = array (
      $_POST['user_name'],
      $_POST['user_age'],
      $_POST['user_gender'],
      $_POST['user_powers'],
      $_POST['user_picture'],
    );


      $conn->prepare($stmt,$values);

   header("Location: main.php");
   exit;
?>
