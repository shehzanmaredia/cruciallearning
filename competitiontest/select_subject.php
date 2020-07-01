

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
  $subject = $_POST["subject"];

  if($subject=="No_subject")
  {
    mysqli_query($conn,"UPDATE loginsystem SET subject='$subject' WHERE user_username='$uname' ");
    $lev=mysqli_fetch_assoc(mysqli_query($conn,"SELECT user_level from loginsystem WHERE user_username='$uname'"));
    $u_lv=$lev['user_level'];
    $sql1=mysqli_fetch_assoc(mysqli_query($conn,"SELECT problems.problem_id,ABS($u_lv - `base_difficulty_level`) as `nearest` FROM `problems` WHERE NOT EXISTS
    (SELECT * FROM `attempts` WHERE problems.problem_id=attempts.attempted and attempts.uname='$uname') ORDER BY `nearest`
     ASC LIMIT 1"));
    $index=$sql1['problem_id'];

    mysqli_query($conn,"UPDATE `testing` SET `index1`='$index' WHERE `uname`='$uname'");
  }
  else
  {

  mysqli_query($conn,"UPDATE loginsystem SET subject='$subject' WHERE user_username='$uname' ");
  $lev=mysqli_fetch_assoc(mysqli_query($conn,"SELECT user_level from loginsystem WHERE user_username='$uname'"));
  $u_lv=$lev['user_level'];
  echo $u_lv;
  $sql1=mysqli_fetch_assoc(mysqli_query($conn,"SELECT problems.problem_id,ABS($u_lv - `base_difficulty_level`) as `nearest` FROM `problems`,`problem_categories` WHERE problem_categories.label='$subject' and problems.problem_id=problem_categories.problem_id AND NOT EXISTS
  (SELECT * FROM `attempts` WHERE problems.problem_id=attempts.attempted and attempts.uname='$uname') ORDER BY `nearest`
   ASC LIMIT 1"));
  $index=$sql1['problem_id'];

  mysqli_query($conn,"UPDATE `testing` SET `index1`='$index' WHERE `uname`='$uname'");

}

  ?>
