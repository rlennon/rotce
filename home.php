<?php
  //Include the config file for DB connection
  include("config.php");
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
      //If the session has not been set then return user to login page
      if(!isset($_SESSION['login_user']))
       {
           header("Location:index.php");  
       }

          echo $_SESSION['login_user'];

          echo "Login Success";
?>

    <div class="wrapper">
        <div class="content">
          <ul>
              <li><a href="logout.php">Logout</a></li>
          </ul>
          <img class="img-float" src="img/dr.png" alt="" width="350" height="350">


    <div class="box">
    <h3>Enter </h3>
    <br>
    <br>
    <!-- Form which allows user to input the number of Minions, Weapons and Date -->
    <form action="calculateCargo.php" method="POST">
    <div class="row">
    	<div class="col-sm-4">

    		<h4 class="WhatType">Minions:</h4>
    	</div>
        <div class="col-sm-4">
        	<input id="tallPlaceholder" class="form-control tallPlaceholder" placeholder="Tall" readonly></br>
        	<input id="shortPlaceholder" class="form-control shortPlaceholder" placeholder="Short" readonly>
        </div>
        <div class="col-sm-4">
        	<input type="number" name="inputTall" class="form-control inputTall" placeholder="Enter number" required min="0"></br>
        	 <input type="number" name="inputShort" class="form-control inputShort" placeholder="Enter number" required min="0">
        </div>

    </div>
      <br>
      <div class="row">
    	<div class="col-sm-4">
    		<h4 class="WhatType">Weapons:</h4>
    	</div>
        <div class="col-sm-4">
        	<input id="largeWeapons" class="form-control largeWeapons" placeholder="Tall" readonly></br>
        	 <input id="smallWeapons" class="form-control smallWeapons" placeholder="Short" readonly>
        </div>
        <div class="col-sm-4">
        	<input type="number" name="inputLarge" class="form-control inputLarge" placeholder="Enter number" required min="0"></br>
        	<input type="number" name="inputSmall" class="form-control inputSmall" placeholder="Enter number" required min="0">
      </div>

    </div>
    <br>
     <div class="row">
      <div class="col-sm-4">

        <h4 class="WhatType">Date:</h4>
      </div>
       <div class="col-sm-4">
       </div>
        <div class="col-sm-4">
          <input type="date" name="inputDate" class="form-control inputDate">
      </div>
    </div>

       <br>
     <div class="row">
      <div class="col-sm-4">

        <h4 class="WhatType">Time:</h4>
      </div>
       <div class="col-sm-4">
       </div>
        <div class="col-sm-4">
          <input type="time" name="inputTime"  class="form-control inputTime">
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
