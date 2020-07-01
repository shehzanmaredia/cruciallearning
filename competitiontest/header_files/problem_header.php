<?php
session_start();

?>

<!DOCTYPE html>



<html lang="en">
<head>
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

<body>
<!--  <nav class="navbar navbar-expand-lg " style="margin: 50px 100px;background-color:#e6e6e6;height:58px;background: linear-gradient(to bottom, rgba(122, 188, 255, 1) 0%,rgba(149, 188, 214, 1) 45%, rgba(64, 150, 238, 1) 100%);">
    <a class="navbar-brand" href="/index.php" style="background-color:transparent;border-radius:10px;">
      <img style="height:40px;width:250px;" src="/img/logo.gif" class="img-fluid logo-img">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 0;padding-right: 0;background: linear-gradient(to bottom, rgba(122, 188, 255, 1) 0%,rgba(149, 188, 214, 1) 45%, rgba(64, 150, 238, 1) 100%);border-radius:0px 12px 12px 0px;">
      <ul class="navbar-nav mr-auto" >
        <li class="nav-item ">
          <a class="nav-link <?php// if ($GLOBALS['body_class'] == 'problems-page') echo 'active';?>" href="/problems.php" style="font-size:15px;color:white">Problem <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="#" style="font-size:15px;color:white">Test Simulation <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="#" style="font-size:15px;color:white">Diagnostic Test<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <div class="dropdown" >
     <button class="button" type="button"  data-toggle="dropdown" style=" background-color: transparent;padding:15px;color:white;border-color:transparent;">
       User Level <span class="caret"></span>
     </button>
     <div class="dropdown-menu">
       <a class="dropdown-item" href="/set_user.php">User Level</a>

     </div>
   </div>
        </li>

      <li>
      <form class="form-inline my-2 my-lg-0">
        <input style="font-size:10px;color:black" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button style="font-size:10px;color:white;border-color:white" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </li>
    <li class="nav-item ">
      <div class="dropdown" >
  <button class="button" type="button"  data-toggle="dropdown" style=" background-color: transparent;padding:15px;color:white;border-color:transparent;">
  <?php// echo $_SESSION['uname'];?> <span class="caret"></span>
  </button>
  <div class="dropdown-menu"   style="background-color:rgb(122, 188, 255);color:white">
    <a class = "dropdown-item" href="/profile.php">Profile</a>
    <a class = "dropdown-item" href="/includes/inbox.inc.php">Messages</a>
    <a class = "dropdown-item" href="/problems.php">Problems</a>
    <form class = "dropdown-item" action="/includes/logout.inc.php" method="post">
      <button type="submit" name="submit" value="logout" style="background-color:lightblue;border-radius:10px;font-size:10px;">Log out</button>
    </form>
  </div>
  </div>


    </li>
  </ul>
    </div>
  </nav>
-->
<!--<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin:30px;background: linear-gradient(to bottom, rgba(122, 188, 255, 1) 0%,rgba(149, 188, 214, 1) 45%, rgba(64, 150, 238, 1) 100%);">
  <a class="navbar-brand" href="/problems.php" style="background-color:transparent;border-radius:10px;">
    <img style="height:40px;width:250px;" src="/img/logo.gif" class="img-fluid logo-img">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="background: linear-gradient(to bottom, rgba(122, 188, 255, 1) 0%,rgba(149, 188, 214, 1) 45%, rgba(64, 150, 238, 1) 100%);">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="/problems.php">Problems </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Test Simulation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Diagnostic Test</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          User Settings
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/set_user.php">User Level</a>

        </div>
      </li>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php// echo $_SESSION['uname'];?>
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class = "dropdown-item" href="/profile.php">Profile</a>
        <a class = "dropdown-item" href="/includes/inbox.inc.php">Messages</a>
        <a class = "dropdown-item" href="/problems.php">Problems</a>
        <form class = "dropdown-item" action="/includes/logout.inc.php" method="post">
          <button type="submit" name="submit" value="logout" style="background-color:lightblue;border-radius:10px;font-size:10px;">Log out</button>
        </form>
      </div>
    </li>
    </ul>

  </div>
</nav>-->
<div class="sec1">
<div class="container" style="padding-left:0px;padding-right:0px;margin:0;max-width:100%;width:100%;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin: 24px 0;">
    <a class="navbar-brand" href="/index.php">
      <img src="/img/logo.gif" class="img-fluid logo-img">
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navb">
      <ul class="navbar-nav mr-auto">
      	<li class="nav-item">
      		<a class="nav-link " style="font-size:15px;" href="/problems.php">Problems</a>
      	</li>
      	<li class="nav-item">
      		<a class="nav-link"  style="font-size:15px;"href="#">Test Simulation</a>
      	</li>
      	<li class="nav-item">
      		<a class="nav-link "  style="font-size:15px;" shref="#">Diagnostic Test</a>
      	</li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            User Settings
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/set_user.php">User Level</a>

          </div>
        </li>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" style="font-size:10px;"type="submit">Search</button>
        </form>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $_SESSION['uname'];?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class = "dropdown-item" href="/profile.php">Profile</a>
            <a class = "dropdown-item" href="/includes/inbox.inc.php">Messages</a>
            <a class = "dropdown-item" href="/problems.php">Problems</a>
            <form class = "dropdown-item" action="/includes/logout.inc.php" method="post">
              <button type="submit" name="submit" value="logout" style="background-color:lightblue;border-radius:10px;font-size:10px;">Log out</button>
            </form>
          </div>
        </li>
      </ul>
        </div>
  </nav>
</div>
</div>


</body>
</html>
