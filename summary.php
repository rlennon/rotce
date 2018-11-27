<?php 
   session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Dr Nefarios Home</title>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/homepage.css" rel="stylesheet">
  <!-- Custom styles for this template -->
</head>

  <body >
        <?php
      if(!isset($_SESSION['login_user'])) // If session is not set then redirect to Login Page
       {
           header("Location:index.php");  
       }
?>

    <div class="wrapper">
        <div class="content">
          <ul>
              <li><a href="logout.php">Logout</a></li>
          </ul>
          <img class="img-float" src="img/dr.png" alt="" width="350" height="350">

    <div class="box">
    <h3>Summary</h3>
    <br>
    <input  class="form-control tallPlaceholder" placeholder="Ships" readonly></br>
    <input  class="form-control shortPlaceholder" placeholder="Subs" readonly><br>
    <input  class="form-control shortPlaceholder" placeholder="Ship by" readonly><br>


    <button type="button" onclick="location.href='home.html';" class="btn btn-danger">Back</button>
    <button type="button" onclick="location.href='summary.html';" class="btn btn-success">Next</button>


    </div>
  </body>
  <div class="footer">
    &copy; 2018 DevOps
  </div>
</html>
