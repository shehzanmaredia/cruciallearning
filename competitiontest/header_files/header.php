<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>

	<title><?php echo $GLOBALS['page_title'];?></title> <?php //Add subtitle for each page?>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

	<!-- Bootstrap -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/latest.js?config=TeX-MML-AM_CHTML' async></script>
	<script type="text/x-mathjax-config">
MathJax.Hub.Config({
  tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
});
	</script>
<script type="text/javascript" async src="path-to-mathjax/MathJax.js?config=TeX-AMS_CHTML"></script>
</head>


<body class="<?php echo $GLOBALS['body_class']?>"> <?php //This needs to be filled in uniquely for each page?>
    <div class="sec1">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin: 24px 0;">
				<a class="navbar-brand" href="/index.php">
					<img src="/img/logo.gif" class="img-fluid logo-img">
				</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navb">
    			<?php include $_SERVER['DOCUMENT_ROOT'] .'/header_files/navbar_tabs_list.php';?>
              	<?php if (!isset($_SESSION['user'])):?>
    				<?php include $_SERVER['DOCUMENT_ROOT']. '/header_files/login_header.php';?>
    			<?php else:?>
    				<?php include $_SERVER['DOCUMENT_ROOT']. '/header_files/logged_in_header.php';?>
    			<?php endif;?>
        		</div>
			</nav>
		</div>
	</div>
</body>
</html>
