<?php
//session_start();

//$uname=$_SESSION['uname'];

$prob_id=$_POST['prob_id'];


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

$solutuion=mysqli_query($conn,"SELECT solution_text from solutions WHERE associated_problem_id='$prob_id'");


$i=1;
while($row = mysqli_fetch_assoc($solutuion))
{
    echo "Solution ";
    echo $i.":";
   echo $row['solution_text'];
   echo "\n\n";
   $i++;
}
 ?>
