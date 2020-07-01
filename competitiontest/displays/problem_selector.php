<?php
session_start();
$name=$_SESSION['uname'];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "competition_site";

// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$ind=mysqli_fetch_assoc(mysqli_query($conn,"SELECT  * FROM `testing` WHERE `uname`='$name'"));
$index=$ind["index1"];
$previous=$ind['prev'];



$sql = "SELECT * from problems WHERE problem_id='$index'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$solutuion=mysqli_query($conn,"SELECT solution_text from solutions WHERE associated_problem_id='$index'");
$name=$_SESSION['uname'];




 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
function disonceagain()
{
  if(document.getElementById("ans").value=="")
  {
    document.getElementById("next").disabled = true;
    $(".msg").show();

  }

}
function skipdisable()
{
  if(!(document.getElementById("ans").value==""))
  {
    document.getElementById("missed").disabled = true;


  }
}
function my() {
document.getElementById("next").disabled = false;

}

function checkAnswer()
{

var prob_id=document.getElementById('prob_id').value;
var ans=document.getElementById('ans').value;

$.ajax({    //create an ajax request to load_page.php
  type: "POST",
  url: 'check.php',
  dataType: "html",   //expect html to be returned
data:'ans='+ans+'&prob_id='+prob_id,
  success: function(response){
      $("#display").html(response);
      //alert(response);
  }

});

}


</script>
<script>

function gettingStop()
{

  if(document.getElementById('prev').value==0)
  {
    document.getElementById("prev").disabled = true;
  }
}

$(document).ready(function(){
$(".msg").hide();
    $(".solution").hide();
    $("#getsol").click(function(){
        $(".solution").show();
    });
});
function myFunction()
{
  var subject=document.getElementById('subject_name').value;

  $.ajax({    //create an ajax request to load_page.php
    type: "POST",
    url: 'select_subject.php',
    dataType: "html",   //expect html to be returned
  data:'subject='+subject,
    success: function(response){
        $("#xin").html(response);
      $(document).ajaxStop(function(){
          window.location.reload();
      });
    }

  });

}
</script>

  <style>
.btn {
    background-color:#72ace0;
    border: none;
    color: black;
    padding: 12px 16px;
    font-size: 16px;
    cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
    background-color: RoyalBlue;
}
</style>

</head>
<body>
<div id="xin">

</div>
  <div class="container" style="width:100%;">
  <div  class="shadow-lg p-3 mb-5 bg-white rounded" >
  <div class="container" style="text-align:center;width:100%">

<?php   $sub=mysqli_query($conn,"SELECT label FROM problem_categories group by label having count(*) >1");
?>



    <select name="subject_name" id="subject_name" onchange="myFunction()" style="float:left;font-size:20px;background-color:#72ace0;border-radius:5px;padding-left:10px;padding-right:10px;">

       <option value="choose_subject" >Choose Subject</option>
       <option value="No_subject" >No Subject</option>
      <?php

      while ($row1=mysqli_fetch_assoc($sub))
      {
        ?>

          <option value="<?php echo $row1['label'];?>" ><?php echo $row1['label'];?></option>

          <?php
      }

 ?>

</select>
<p style="font-size:20px;">You can Choose subject when you come back after update your Level.</p>




  <div class="container" style="width:100%;padding-top:30px;">
  <div class="row">
  <div class="col-sm-10" >
        <div class="panel panel-info" style="height:500px">
        <div class="panel-heading" style="font-size:30px;background-color:#72ace0;color:black">
          <b>Problem <?php   echo "<strong '>".$row['problem_id']."</strong>";?></b>
        </div>
        <div class="panel-body" style="text-align:left;">
    <?php


     echo "<p style='font-size:15px;'>".$row['problem_text']."</p>";

        ?></div>
      </div></div>
  <div class="col-sm-2">
        <div class="panel panel-info" style="height:500px">
        <div class="panel-body" style="text-align:center;">
          <div class="row">
            <div class="col-sm-12" style="padding-top:80px;">
              <button class="btn"><i class="fas fa-exclamation-circle"></i> Hint</button>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12" style="padding-top:50px;padding-bottom:50px;">
              <button class="btn"><i class="fas fa-exclamation-circle"></i> Hint</button>
            </div>

          </div>
          <div class="row">
            <div class="col-sm-12" style="padding-bottom:50px;">
              <button class="btn"><i class="fas fa-exclamation-circle"></i> Hint</button>
            </div>
          </div>
        </div></div></div>
  </div>
  <table style="width:100%">
    <col width="42%">
    <col width="8%">
    <col width="40%">
    <col width="10%">

    <tr>



<td >
     <div class="form-group">

    <div  id="sol" class="form-control"  name="sol" style="overflow:auto;height:200px;">
    <div class="solution">  <?php
      $i=1;
      while($row4 = mysqli_fetch_assoc($solutuion))
      {
          echo "Solution ";
          echo $i.":";
         echo $row4['solution_text'];
         echo "\n\n";
         $i++;
      }

       ?>
     </div>
     </div>

  </div>
</td >
   <td style="text-align:right;padding-left:8px;padding-right:8px;padding-bottom: 15px;">
     <button  type="submit" class="btn btn-default" name="getsol" id="getsol" style="background-color:#4286f4;font-size:15px;padding: 4px 6px;">
       Check Solution
     </button>
</td>
<td>
  <div class="form-group">
    <input type="hidden" id="prob_id" name="prob_id" value="<?php echo $index; ?>"/>
 <input type="text" class="form-control" id="ans" name="ans" onkeypress="my();"  placeholder="Write your answer here" >

</div>
</td >
<td style="text-align:left;padding-left:8px;padding-bottom: 15px;">
  <button  type="submit" class="btn btn-default" name="chk" id="chk" style="background-color:#4286f4;font-size:15px;padding: 4px 6px;" onclick="checkAnswer();">
    Submit
  </button>
</td>

</tr>
</table>
<div id="display" >

</div>
<form method="POST" action="test.php">
  <table style="width:100%;">
    <col width="50%">
    <col width="50%">
<tr>
<td style="text-align:left;">

<button class="fas fa-chevron-circle-left"  type="submit" name="prev"  style="font-size:50px;color:#4286f4;background-color:white;" id="prev" value="<?php echo $previous;?>" onmouseover="gettingStop()" ></button>

</td>
<td style="text-align:right;">
  <button class="fas fa-fast-forward"  type="submit" name="missed"  style="font-size:25px;color:#4286f4;background-color:white;margin-right:20px;border-top-right-radius:15px;border-bottom-left-radius: 15px;" id="missed" value="<?php echo $index;?>"  onmouseover="skipdisable();" >SKIP</button>

  <button class="fas fa-chevron-circle-right" type="submit" name="next"  style="font-size:50px;color:#4286f4;background-color:white;" id="next" value="<?php echo $index;?>" onmouseover="disonceagain();" disabled ></button>

</td>
</tr>
</table>
</form>
<div class="msg" >
Please answer this if you want to go next otherwise You can press SKIP
</div>
  </div>
  </div>
  </div>
  </div>


</body>
</html>
