<?php
  //Include the config file for DB connection
	include("config.php");
	session_start();

	if (isset($_POST['submit'])) {
    //be sure to validate and clean your variables
		$tallMinions = $_POST['inputTall'];
		$query = "SELECT * FROM Minions WHERE Type='Tall'";
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_assoc($result);
		$row['Area'];

		$shortMinions = $_POST['inputShort'];
		$query2 = "SELECT * FROM Minions WHERE Type='Small'";
		$result2 = mysqli_query($db, $query2);
		$row2 = mysqli_fetch_assoc($result2);

		$largeWeapons = $_POST['inputLarge'];
		$query3= "SELECT * FROM Weapons WHERE Type='Large'";
		$result3 = mysqli_query($db, $query3);
		$row3 = mysqli_fetch_assoc($result3);

		$smallWeapons = $_POST['inputSmall'];
		$query4= "SELECT * FROM Weapons WHERE Type='Small'";
		$result4 = mysqli_query($db, $query4);
		$row4 = mysqli_fetch_assoc($result4);

		// Save time and date input to variables
		$date = $_POST['inputDate'];
		$time = $_POST['inputTime'];

		// Minion weight calculations
		// Multiply the area & weight by the number of minions
		$totalAreaTallMinions = ($row['Area'] * $tallMinions);
		$totalWeightTallMinions = $row['Weight'] * $tallMinions;
		$totalAreaSmallMinions =  $row2['Area'] * $shortMinions;
		$totalWeightSmallMinions = $row2['Weight'] * $shortMinions;

		// Weapons weight calculations
		// Multiply the area & weight by the number of weapons
		$totalAreaLargeWeapons = $row3['Area'] * $largeWeapons;
		$totalWeightLargeWeapons = $row3['Weight'] * $largeWeapons;
		$totalAreaSamllWeapons = $row4['Area']  * $smallWeapons;
		$totalWeightSmallWeapons = $row4['Weight']  * $smallWeapons;

		// Calculate total cargo
		$totalCargoArea = ($row['Area'] * $tallMinions)+ ($row2['Area'] * $shortMinions)+($row3['Area'] * $largeWeapons)+($row4['Area']  * $smallWeapons);
		$totalCargoWeight = ($row['Weight'] * $tallMinions)+ ($row2['Weight'] * $shortMinions)+($row3['Weight'] * $largeWeapons)+($row4['Weight']  * $smallWeapons);
		$totalNumberCargo = $tallMinions+$shortMinions+$largeWeapons+$smallWeapons;

		// Constants for the vessel weights

		// Ships
		$shipArea = 200;
		$shipWeight = 200;
		$shipSpeed = 1.5;

		// Subs
		$subArea = 300;
		$subWeight = 300;
		$subSpeed = 1;

		//ToDo - Calculation for weight - currently not an issue, as area is greater/equal to weight on all types
		$noOfShipsNeeded = ceil($totalCargoArea / $shipArea);
		$noOfSubsNeeded = ceil($totalCargoArea / $subArea);

		// Determine the number of shipments that are needed
		$noOfShipGroups = ceil($noOfShipsNeeded / 5);
		$noOfSubGroups = ceil($noOfSubsNeeded / 2);

		// Calculate an estimated final delivery date
		$dt = new DateTime('00/00/0000 00:00:00');
		$days = 0;
		$hours = $dt->format('H');
		$minutes = $dt->format('i');

		//For every ship group, loop through
		for($i=0;$i<$noOfShipGroups;$i++) 
		{
			if($hours >= 22)
				$days += 1;
			$dt->add(new DateInterval('PT2H')); //Every ship groups takes one hour to load, one hour to disembark

			if(($hours == 23) || ( ($hours == 22) && ($minutes >=30) ))
				$days += 1;
			$dt->add(new DateInterval('PT1H30M')); //Every ship takes 1:30 hrs to travel
		}
		//Vessel groups require 10mins after offloading before next group can enter, last group is not counted as doesn't need extra time
		for($j=0;$j<$noOfShipGroups-1;$j++)
			$dt->add(new DateInterval('PT10M'));

		$hours = $dt->format('H');
		$minutes = $dt->format('i');

		//Get earliest date of delivery completion
		$currentDate = new DateTime;

    	function addtime($time1,$time2)
		{
    		$interval1 = $time1->diff(new DateTime('00/00/0000 00:00:00')) ;
    		$interval2 = $time2->diff(new DateTime('00/00/0000 00:00:00')) ;

    		$e = new DateTime('00:00');
    		$f = clone $e;
    		$e->add($interval1);
    		$e->add($interval2);
    		$total = $f->diff($e)->format("%D/%M/%Y %H:%I");
    		return $total;
		}

		$deliveryTime = addtime($currentDate,$dt);

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
						<!-- Display data into table -->
						<label>Total Area of Tall Minions</label>
				    <input  class="form-control tallPlaceholder" value=<?php echo "$totalAreaTallMinions";?> readonly></br>
						<label>Total Weight of Tall Minions</label>
				    <input  class="form-control shortPlaceholder" value=<?php echo "$totalWeightTallMinions";?> readonly><br>
						<label>Total Area of Small Minions</label>
				    <input  class="form-control shortPlaceholder" value=<?php echo "$totalAreaSmallMinions";?> readonly><br>
						<label>Total Weight of Small Minions</label>
						<input  class="form-control shortPlaceholder" value=<?php echo "$totalWeightSmallMinions";?> readonly><br>
						<label>Total Area of Large Weapons</label>
						<input  class="form-control shortPlaceholder" value=<?php echo "$totalAreaLargeWeapons";?> readonly><br>
						<label>Total Weight of Large Weapons</label>
						<input  class="form-control shortPlaceholder" value=<?php echo "$totalWeightLargeWeapons";?> readonly><br>
						<label>Total Area of Small Weapons</label>
						<input  class="form-control shortPlaceholder" value=<?php echo "$totalAreaSamllWeapons";?> readonly><br>
						<label>Total Weight of Small Weapons</label>
						<input  class="form-control shortPlaceholder" value=<?php echo "$totalWeightSmallWeapons";?> readonly><br>
						<label>Total Cargo Area</label>
						<input  class="form-control shortPlaceholder" value=<?php echo "$totalCargoArea";?> readonly><br>
						<label>Total Cargo Weight</label>
						<input  class="form-control shortPlaceholder" value=<?php echo "$totalCargoWeight";?> readonly><br>
						<label>Total Number of Cargo</label>
						<input  class="form-control shortPlaceholder" value=<?php echo "$totalNumberCargo";?> readonly><br>
						<br>
						<p>No. Ships: <?php echo $noOfShipsNeeded; ?></p>
						<p>OR</p>
						<p>No. Subs: <?php echo $noOfSubsNeeded; ?></p>
						<br>
						<p>No. Ship Groups: <?php echo $noOfShipGroups; ?></p>
						<p>OR</p>
						<p>No. Sub Groups: <?php echo $noOfSubGroups; ?></p>
						<br>
						<p>Time taken: <?php echo ($days.' days '.$hours.' hours '.$minutes.' minutes');?></p>
						<p>Date of earliest arrival: <?php echo $deliveryTime; ?></p>
						<!-- Redirect to home.php -->
    				<button type="button" onclick="location.href='home.php';" class="btn btn-danger">Back</button>
    				<button type="button" onclick="location.href='home.php';" class="btn btn-success">Next</button>

    </div>
  </body>
</html>
