<html>
<head>
</head>
<body>
<?php
// Get all types from the database
include('connection.php');
$conn = new Database;
$conn->connect();
$sql = 'SELECT * FROM comments';
$comments = $database->query($sql);
      ?>
<form action="comment1.php" method="post">
    <label for="comment">Write a comment</label>
    <textarea name="comment"></textarea>
  <?php
        foreach ($comments as $comment_id) {
      ?>
    <input class="submitProfile" type="submit" name="submit" value="Add">
  </option>
   <?php
        }
    ?>
 </select>
   <input type="submit" name="submit" value="Add">
</form>
</body>
</html>
