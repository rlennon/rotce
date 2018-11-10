<?php
include("config.php");
 
    //check if username and password are not empty
if (isset($_POST['inputUsername']) && isset($_POST['inputPassword'])) {
    //be sure to validate and clean your variables
      $username = $_POST['inputUsername'];
      $password = $_POST['inputPassword'];

      if($password==$_POST['inputConfirm']) //check if passsword enter == confirm password
        {
          echo '<script language="javascript"> alert("User added to System")</script>';
          $query = "INSERT INTO users (UserID, Password) VALUES('$username','$password') "; //Add User to Database
          $result = mysqli_query($db, $query);
       }
      else //when passwords don't match
       {
      echo '<script language="javascript"> alert("Passwords Do not Match")</script>';
       }
}
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

    <div class="wrapper">
        <div class="content">
          <ul>
              <li><a href="index.html">Logout</a></li>
          </ul>
          <img class="img-float" src="img/dr.png" alt="" width="350" height="350">


    <div class="box">
    <h3>Add User </h3>
    <br>
    <br>
    <form action="" method="POST">
    <div class="row">
    	<div class="col-sm-4">
        <h4 class="WhatType">Username:</h4>
      </div>
        <div class="col-sm-4">
          <input type="text" name="inputUsername" class="form-control inputUsername">
      </div>
    </div>

       <br>
     <div class="row">
      <div class="col-sm-4">

        <h4 class="WhatType">Password:</h4>
      </div>
        <div class="col-sm-4">
          <input type="password" name="inputPassword"  class="form-control inputPassword">
      </div>
    </div>

        <br>
     <div class="row">
      <div class="col-sm-4">

        <h4 class="WhatType">Confirm Password:</h4>
      </div>
        <div class="col-sm-4">
          <input type="password" name="inputConfirm"  class="form-control inputConfirm">
      </div>
    </div>
    <input class="" name="submit" type="submit" value="Go!" name="Go!">   
</form>
</div>

        </div>
        <div class="footer">
        	&copy; 2018 DevOps
        </div>
    </div>
  </body>

</html>
