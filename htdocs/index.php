<?php
$page_title = 'Webapp';
$body_class = 'home-body';
include_once 'header_files/header.php'; // this index.php should always be in the root folder ?>
<div class="container">
	<?php include 'displays/carousel.php';?>
</div>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-md-7">
			<?php include 'displays/featured.php';?>
			</div>
			<div class="col-lg-5 col-md-5">
			<?php include 'displays/learn_more.php';?>
			</div>
		</div>
	</div>
</div>
<?php include_once 'footer_files/footer.php';?>