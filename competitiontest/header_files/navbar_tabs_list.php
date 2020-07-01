<?php //the variable $GLOBAL['body-class'] should be set before including the header.php file, which in turn includes this file?>
<ul class="navbar-nav mr-auto">
	<li class="nav-item">
		<a class="nav-link <?php if ($GLOBALS['body_class'] == 'home-body') echo 'active';?>" href="/index.php">Home</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?php if ($GLOBALS['body_class'] == 'about-page') echo 'active';?>" href="/about-us.php">About Us</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?php if ($GLOBALS['body_class'] == 'resources-page') echo 'active';?>" href="/resources.php">Resources</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?php if ($GLOBALS['body_class'] == 'blog-page') echo 'active';?>" href="/blog.php">Blog</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?php if ($GLOBALS['body_class'] == 'we-do-page') echo 'active';?>" href="/what-we-do.php">What We Do</a>
	</li>
	<li class="nav-item">
		<a class="nav-link <?php if ($GLOBALS['body_class'] == 'contact-body') echo 'active';?>" href="/contact-us.php">Contact Us</a>
	</li>
</ul>