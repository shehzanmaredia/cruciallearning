<?php
session_start();
$uname=$_SESSION['uname'];

$prob_id=$_POST['prob_id'];


$answer=$_POST['ans'];

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

$solutuion=mysqli_query($conn,"SELECT problem_answer from problems WHERE problem_id='$prob_id'");
$row = mysqli_fetch_assoc($solutuion);

if($row['problem_answer']==$answer)
{
  echo "<fieldset><span style='color:green;'>Correct</span></fieldset>";
  $_SESSION['ansr']="correct";
mysqli_query($conn,"UPDATE loginsystem SET user_level=user_level+5  WHERE user_username='$uname'");
}
  else
  {
  echo "<fieldset><span style='color:red;'>InCorrect</span></fieldset>";
    $_SESSION['ansr']="incorrect";
  mysqli_query($conn,"UPDATE loginsystem SET user_level=user_level-5  WHERE user_username='$uname'");

}

 ?>
