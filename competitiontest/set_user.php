<?php
session_start();

$page_title = 'Webapp | Profile';
$body_class = 'profile-page';
include_once $_SERVER['DOCUMENT_ROOT'] . '/header_files/problem_header.php';

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

  $setting_level=mysqli_fetch_assoc(mysqli_query($conn,"SELECT  `user_level` FROM `loginsystem` WHERE `user_username`='$uname'"));






?>
<html>
<head>
<script>
function myFunction() {
	var u_lvl=document.getElementById('user_lvl').value;
	if(u_lvl>=1000&&u_lvl<=2600)
	{

	document.getElementById('set').disabled=false;
	}
	else {
	
	document.getElementById('user_lvl').placeholder="Please Enter Level Betwee 1000-2600";
	}
}



</script>
</head>
<div class="content">
	<div class="container" style="margin-bottom:100px;" >
		<div class="row" >
		<div class="col-sm-6" style="background-color:white;border-radius:10px;" >
			<div class="container" style="margin:20px;">
			  <h2>Enter level between 1000-2600</h2>

			  <form action="set_user_level.php" method="POST">
			    <div class="form-group">
			      <h2>User Level </h2>
			      <input type="number" placeholder="1000-2600" class="form-control" id="user_lvl" name="user_lvl" onkeyup="myFunction();">

			    </div>
					<div class="form-group">

						<input type="number" placeholder="User Level" class="form-control" id="user_lvl1" name="user_lvl1" value="<?php echo $setting_level['user_level'] ?>"disabled>
					</div>


			      <button type="submit" class="btn btn-primary" id="set" name="set" disabled>Set</button>

			  </form>
			</div>

		</div>

		</div>
	</div>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/footer_files/footer.php';?>
