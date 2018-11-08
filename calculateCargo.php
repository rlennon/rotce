<?php
	include("config.php");

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


		$date = $_POST['inputDate'];
		$time = $_POST['inputTime'];

		$areaTallMinions = ($row['Area'] * $tallMinions);

		echo "Total Area of Tall Minions = "; echo $areaTallMinions;
		echo "<br>";
		echo "Total Weight of Tall Minions = "; echo $row['Weight'] * $tallMinions;
		echo "<br>";
		echo "Total Area of Small Minions = "; echo $row2['Area'] * $shortMinions;
		echo "<br>";
		echo "Total Weight of Small Minions = "; echo $row2['Weight'] * $shortMinions;
		echo "<br>";
		echo "Total Area of Large Weapons = "; echo $row3['Area'] * $largeWeapons;
		echo "<br>";
		echo "Total Weight of Large Weapons = "; echo $row3['Weight'] * $largeWeapons;
		echo "<br>";
		echo "Total Area of Small Weapons = "; echo $row4['Area']  * $smallWeapons;
		echo "<br>";
		echo "Total Weight of Small Weapons = "; echo $row4['Weight']  * $smallWeapons;

		echo "<br>";
		echo "<br>";
		echo "Total Cargo Area = "; echo ($row['Area'] * $tallMinions)+ ($row2['Area'] * $shortMinions)+($row3['Area'] * $largeWeapons)+($row4['Area']  * $smallWeapons);
		echo "<br>";
        echo "Total Cargo Weight = "; echo ($row['Weight'] * $tallMinions)+ ($row2['Weight'] * $shortMinions)+($row3['Weight'] * $largeWeapons)+($row4['Weight']  * $smallWeapons);
		echo "<br>";
        echo "Total Number of Cargo= "; echo  $tallMinions+$shortMinions+$largeWeapons+$smallWeapons;
		echo "<br>";
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
				    <h3>Summary</h3>
				    <br>
						<label>Total Area of Tall Minions</label>
				    <input  class="form-control tallPlaceholder" value""= readonly></br>
						<label>Total Weight of Tall Minions</label>
				    <input  class="form-control shortPlaceholder" value""= readonly><br>
						<label>Total Area of Small Minions</label>
				    <input  class="form-control shortPlaceholder" placeholder="Ship by" readonly><br>
						<label>Total Weight of Small Minions</label>
						<input  class="form-control shortPlaceholder" placeholder="Subs" readonly><br>
						<label>Total Area of Large Weapons</label>
						<input  class="form-control shortPlaceholder" placeholder="Ship by" readonly><br>
						<label>Total Weight of Large Weapons</label>
						<input  class="form-control shortPlaceholder" placeholder="Subs" readonly><br>
						<label>Total Area of Small Weapons</label>
						<input  class="form-control shortPlaceholder" placeholder="Ship by" readonly><br>
						<label>Total Weight of Small Weapons</label>
						<input  class="form-control shortPlaceholder" placeholder="Ship by" readonly><br>
						<label>Total Cargo Area</label>
						<input  class="form-control shortPlaceholder" placeholder="Ship by" readonly><br>
						<label>Total Cargo Weight</label>
						<input  class="form-control shortPlaceholder" placeholder="Ship by" readonly><br>
						<label>Total Number of Cargo</label>
						<input  class="form-control shortPlaceholder" placeholder="Ship by" readonly><br>

    <button type="button" onclick="location.href='home.html';" class="btn btn-danger">Back</button>
    <button type="button" onclick="location.href='summary.html';" class="btn btn-success">Next</button>


    </div>
  </body>
  <div class="footer">
    &copy; 2018 DevOps
  </div>
</html>
