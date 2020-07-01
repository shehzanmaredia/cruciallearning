<?php
session_start();


?>
<div class="login">
	<div class="dropdown">
		<button class="btn-mini dropdown-toggle" style="background-color:lightblue;border-radius:10px;font-size:15px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
			aria-expanded="false"><?php echo $_SESSION['uname']; ?></button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton"  style="background-color:rgb(122, 188, 255);color:white">
			<a class = "dropdown-item" href="/profile.php">Profile</a>
			<a class = "dropdown-item" href="/includes/inbox.inc.php">Messages</a>
			<a class = "dropdown-item" href="/problems.php">Problems</a>
			<form class = "dropdown-item" action="/includes/logout.inc.php" method="post">
				<button type="submit" name="submit" value="logout" style="background-color:lightblue;border-radius:10px;font-size:15px;">Log out</button>
			</form>
		</div>
	</div>
</div>
