<?php
session_start();
$uname=$_SESSION['uname'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "competition_site";
// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["set"]))
{
  $lvl=$_POST['user_lvl'];

  mysqli_query($conn,"UPDATE `loginsystem` SET `user_level`='$lvl' WHERE `user_username`='$uname'");
  $sql12=mysqli_fetch_assoc(mysqli_query($conn,"SELECT problems.problem_id,ABS($lvl - `base_difficulty_level`) as `nearest` FROM `problems` WHERE NOT EXISTS
  (SELECT * FROM `attempts` WHERE problems.problem_id=attempts.attempted and attempts.uname='$uname') ORDER BY `nearest`
   ASC LIMIT 1"));
  $indexUpdated=$sql12['problem_id'];
  mysqli_query($conn,"UPDATE `testing` SET `index1`='$indexUpdated' WHERE uname='$uname'");
  mysqli_query($conn,"UPDATE `loginsystem` SET subject='No_subject' WHERE `user_username`='$uname'");






header('Location: set_user.php');
}

 ?>
