<?php 
$page_title = 'Webapp | Login';
$body_class = 'login-page';
include_once 'header_files/header.php';  //this is currently in the root folder?>

<div class="content login-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 offset-lg-2">
				<div class="row">
					<div class="col-lg-12">
					<?php include 'displays/login_interface.php'; //Why do we embed this inside so many div tags? ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once 'footer_files/footer.php';?>