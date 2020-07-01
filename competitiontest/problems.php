<?php
session_start();

$page_title = 'Webapp | Problems';
$body_class = 'problem-page';
include_once 'header_files/problem_header.php';	//this index.php should always be in the root folder?>



	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<?php
					$name=$_SESSION['uname'];
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
					$u_lvl=mysqli_fetch_assoc(mysqli_query($conn,"SELECT  `user_level` FROM `loginsystem` WHERE `user_username`='$name'"));

			if($u_lvl["user_level"]==0)
				{?>
						<div class="container">
<p style="font-size:30px;color:black;">Please Set Your Level Under User Setting->User Level</p>
						</div>
				<?php

			}
					else {
					include $_SERVER['DOCUMENT_ROOT'] .  '/displays/problem_selector.php';
				}


?>

				</div>
			</div>
		</div>
	</div>
	<?php unset($_SESSION['solutions_list']); unset($_SESSION['correct']);?>
	<footer><?php include_once 'footer_files/footer.php';?></footer>
