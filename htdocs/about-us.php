<?php
$page_title = 'Webapp | About';
$body_class = 'about-page';
include_once 'header_files/header.php';  //this is currently in the root folder?>


<div class="content">
	<!-- Page Content -->
	<div class="container">
		<!-- Intro Content -->
		<div class="row">
			<div class="col-lg-6">
				<img class="img-fluid rounded mb-4" src="img/1.jpg" alt="">
			</div>
			<div class="col-lg-6">
				<div class="featured-project">
					<h5>About Our Business</h5>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed
					violuptate nihil eum consectetur similique? Consectetur, quod,
					incidunt, harum nisi dolores delectus reprehenderit voluptatem
					perferendis dicta dolorem non blanditiizs ex fugiat.Lorem ipsum
					dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam
					vitae illum voluptatum aut sequi impedit non velit ab ea pariatur
					sint quidem corporis eveniet. Odit, temporibus reprehenderit
					dolorum!Lorem ipsum dolor sit amet, consectetur adipisicing elit.
					Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti
					eum ratione ex ea praesentium quibusdam? Aut, in eum facere
					corrupti necessitatibus perspiciatis quis?</p>
			</div>
		</div>
		<!-- /.row -->

		<!-- Team Members -->
		<div class="featured-project">
			<h5>Meet Our Team</h5>
		</div>

		<div class="row">
			<?php include 'displays/team_list/member1.php';?>
			<?php include 'displays/team_list/member2.php';?>
			<?php include 'displays/team_list/member3.php';?>
		</div>
		<!-- /.row -->

		<!-- Our Customers -->
		<div class="featured-project">
			<h5>Our Customers</h5>
		</div>
		<div class="row">
			<div class="col-lg-2 col-sm-4 mb-4">
				<img class="img-fluid" src="img/2.jpg" alt="">
			</div>
			<div class="col-lg-2 col-sm-4 mb-4">
				<img class="img-fluid" src="img/2.jpg" alt="">
			</div>
			<div class="col-lg-2 col-sm-4 mb-4">
				<img class="img-fluid" src="img/2.jpg" alt="">
			</div>
			<div class="col-lg-2 col-sm-4 mb-4">
				<img class="img-fluid" src="img/2.jpg" alt="">
			</div>
			<div class="col-lg-2 col-sm-4 mb-4">
				<img class="img-fluid" src="img/2.jpg" alt="">
			</div>
			<div class="col-lg-2 col-sm-4 mb-4">
				<img class="img-fluid" src="img/2.jpg" alt="">
			</div>
		</div>
		<!-- /.row -->

	</div>
	<!-- /.container -->
</div>

<?php include_once 'footer_files/footer.php';?>