<?php
include("config.php");
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
    <form action="calculateCargo.php" method="POST">
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
