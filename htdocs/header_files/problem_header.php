<?php
session_start();

?>

<!DOCTYPE html>



<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
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
  <nav class="navbar navbar-expand-lg" style="margin: 50px;background-color:#4096ee">
    <a class="navbar-brand" href="/index.php">
      <img style="height:40px;width:250px;" src="/img/logo.gif" class="img-fluid logo-img">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/problems.php" style="font-size:15px;color:white">Problem <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" style="font-size:15px;color:white">Test Simulation <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#" style="font-size:15px;color:white">Diagnostic Test<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
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
    <li class="nav-item active">
      <div class="dropdown" >
  <button class="button" type="button"  data-toggle="dropdown" style=" background-color: transparent;padding:15px;color:white;border-color:transparent;">
  <?php echo $_SESSION['uname'];?> <span class="caret"></span>
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



</body>
</html>
