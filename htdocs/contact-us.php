<?php
$page_title = 'Webapp | Contact us';
$body_class = 'contact-body';
include_once 'header_files/header.php';
?>
<div class="content contact-pad">
	<div class="container contact-page">
		<div class="row">
			<div class="col-lg-8 col-md-8 mb-4">
				<?php include 'displays/contact_interface.php';?>
			</div>
			<!-- Contact Details Column -->
			<div class="col-lg-4 col-md-4 mb-4">
				<?php include 'displays/contact_details.php';?>
			</div>
		</div>
	</div>
</div>
<?php include_once 'footer_files/footer.php';?>