<html>
<body>
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

		echo "Total Area of Tall Minions = "; echo $row['Area'] * $tallMinions;
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
</body>
</html>