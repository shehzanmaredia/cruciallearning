<?php
session_start();
$uname=$_SESSION['uname'];
$ansr=$_SESSION['ansr'];
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

if (isset($_POST["next"]))
{


  $sql=mysqli_fetch_assoc(mysqli_query($conn,"SELECT  * FROM `testing` WHERE `uname`='$uname'"));
  $attempts=$sql["test"];
  $attempts++;
  $index=$sql["index1"];

      mysqli_query($conn,"UPDATE `testing` SET `test`='$attempts' WHERE uname='$uname'");
      mysqli_query($conn,"UPDATE `testing` SET `prev`='$index' WHERE uname='$uname'");
      mysqli_query($conn,"INSERT INTO `attempts`(`attempted`, `uname`, `status`) VALUES ('$index','$uname','$ansr')");


    $sql1=mysqli_fetch_assoc(mysqli_query($conn,"SELECT  `user_level`,`subject` FROM `loginsystem` WHERE `user_username`='$uname'"));
      $user_level=$sql1["user_level"];
      $subject=$sql1["subject"];
      if($subject=="No_subject")
      {
        $sql12=mysqli_fetch_assoc(mysqli_query($conn,"SELECT problems.problem_id,ABS($user_level - `base_difficulty_level`) as `nearest` FROM `problems` WHERE NOT EXISTS
        (SELECT * FROM `attempts` WHERE problems.problem_id=attempts.attempted and attempts.uname='$uname') ORDER BY `nearest`
         ASC LIMIT 1"));
        $indexUpdated=$sql12['problem_id'];
        mysqli_query($conn,"UPDATE `testing` SET `index1`='$indexUpdated' WHERE uname='$uname'");

          if($ansr=="incorrect")
          {
             mysqli_query($conn,"UPDATE `testing` SET `prev`=0 WHERE uname='$uname'");

          }
          header('Location: problems.php');
      }
      else
      {
          $sql12=mysqli_fetch_assoc(mysqli_query($conn,"SELECT problems.problem_id,ABS($user_level - `base_difficulty_level`) as `nearest` FROM `problems`,`problem_categories` WHERE problem_categories.label='$subject' and problems.problem_id=problem_categories.problem_id AND NOT EXISTS
          (SELECT * FROM `attempts` WHERE problems.problem_id=attempts.attempted and attempts.uname='$uname') ORDER BY `nearest`
           ASC LIMIT 1"));
          $indexUpdated=$sql12['problem_id'];
          mysqli_query($conn,"UPDATE `testing` SET `index1`='$indexUpdated' WHERE uname='$uname'");

          if($ansr=="incorrect")
          {
             mysqli_query($conn,"UPDATE `testing` SET `prev`=0 WHERE uname='$uname'");

          }
          header('Location: problems.php');
      }



}
else if (isset($_POST["missed"]))
{

  $sql=mysqli_fetch_assoc(mysqli_query($conn,"SELECT  * FROM `testing` WHERE `uname`='$uname'"));

  $index=$sql["index1"];

      mysqli_query($conn,"INSERT INTO `attempts`(`attempted`, `uname`, `status`) VALUES ('$index','$uname','missed')");


    $sql1=mysqli_fetch_assoc(mysqli_query($conn,"SELECT  `user_level`,`subject` FROM `loginsystem` WHERE `user_username`='$uname'"));
      $user_level=$sql1["user_level"];
      $subject=$sql1["subject"];
      if($subject=="No_subject")
      {
        $sql12=mysqli_fetch_assoc(mysqli_query($conn,"SELECT problems.problem_id,ABS($user_level - `base_difficulty_level`) as `nearest` FROM `problems` WHERE NOT EXISTS
        (SELECT * FROM `attempts` WHERE problems.problem_id=attempts.attempted and attempts.uname='$uname') ORDER BY `nearest`
         ASC LIMIT 1"));
        $indexUpdated=$sql12['problem_id'];
        mysqli_query($conn,"UPDATE `testing` SET `index1`='$indexUpdated' WHERE uname='$uname'");

          if($ansr=="incorrect")
          {
             mysqli_query($conn,"UPDATE `testing` SET `prev`=0 WHERE uname='$uname'");

          }
          header('Location: problems.php');
      }
      else
      {
          $sql12=mysqli_fetch_assoc(mysqli_query($conn,"SELECT problems.problem_id,ABS($user_level - `base_difficulty_level`) as `nearest` FROM `problems`,`problem_categories` WHERE problem_categories.label='$subject' and problems.problem_id=problem_categories.problem_id AND NOT EXISTS
          (SELECT * FROM `attempts` WHERE problems.problem_id=attempts.attempted and attempts.uname='$uname') ORDER BY `nearest`
           ASC LIMIT 1"));
          $indexUpdated=$sql12['problem_id'];
          mysqli_query($conn,"UPDATE `testing` SET `index1`='$indexUpdated' WHERE uname='$uname'");
          mysqli_query($conn,"UPDATE `testing` SET `prev`=0 WHERE uname='$uname'");
          header('Location: problems.php');
      }




}
else
{



      $var=mysqli_fetch_assoc(mysqli_query($conn,"SELECT  `prev` FROM `testing` WHERE `uname`='$uname'"));
      $prev=$var['prev'];

        mysqli_query($conn,"UPDATE `testing` SET `index1`='$prev' WHERE uname='$uname'");
        mysqli_query($conn,"UPDATE `testing` SET `prev`=0 WHERE uname='$uname'");
    header('Location: problems.php');



}







 ?>
