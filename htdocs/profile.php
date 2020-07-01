<?php
session_start();

$page_title = 'Webapp | Profile';
$body_class = 'profile-page';
include_once $_SERVER['DOCUMENT_ROOT'] . '/header_files/header.php';
?>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-5">
			Here is some text
			<?php
		
			include  $_SERVER['DOCUMENT_ROOT'] . '/displays/learn_more.php';?>
			</div>
		</div>
	</div>
</div>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/footer_files/footer.php';?>
