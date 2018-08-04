<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">

</head>
<body >

<div class="headerDiv">
  <h1>Tea Forecasting System</h1>
</div>

<div style="overflow:auto">
  <div class="menu">

  
   <a href="HomeLogin.php">Home</a>
	<a href="ViewDetail.php">Profile</a>
	<a href="Prediction.php">Prediction</a>
	<a href="PredictionDetails.php">Prediction Log</a> 
	<a href="ViewLoginDetails.php">Login Log</a> 
	<a href="logout.php">Logout</a>
	<ul>
	<a class ="yy" href="">Price History</a>
	<li>
	<div class="xx">
	<a href="UvaHigh.php">Uva High</a>
	<a href="UvaMedium.php">Uva Medium</a>
	<a href="UvaLow.php">Uva Low</a>
	<a href="WesternHigh.php">Western High</a>
	<a href="WesternMedium.php">Western Medium</a>
	<a href="WesternLow.php">Western Low</a>
	</div>
	</li>
	</ul>
  </div>

  <div class="main">
  <h3> <?php session_start();
  echo "welcome ";
  echo $_SESSION['Name'];
  
?> </h3>

    <h2>Predicted Details</h2>
	
<table id="PredictLog">
  <tr>
    <th>DateTime</th>
    <th>PlantLevel</th>
    <th> Place </th>
	<th> Temperature </th>
	<th> Rainfall </th>
	<th> Humility </th>
	<th> USD </th>
	<th> FuelRate </th>
	<th> Price </th>
  </tr>
	<?php

	 $connection = mysqli_connect("localhost","root","","factors")
or die("Could not connect to server");

$db = mysqli_select_db($connection , "factors")
or die("<b> Connection Fails");

	 $Email=$_SESSION['Email'];
	 
	 $sql ="SELECT * FROM log WHERE Email= '".$Email."' ORDER BY Id DESC";
	
      $result = mysqli_query($connection, $sql);
	while($row = mysqli_fetch_assoc($result)){
			$Timestamp=$row['Timestamp'];
			$Plant_level=$row['Plant_level'];
			$Place=$row['Place'];
			$Temperature=$row['Temperature'];
			$Rainfall=$row['Rainfall'];
			$Humility=$row['Humility'];
			$USD=$row['USD'];
			$Fuel_Rate=$row['Fuel_Rate'];
			$Price=$row['Price'];
			if ($Price=="0")
			{
				$Price="Pending";
			}
			
		echo "<tr>";
		echo "<th>". $Timestamp."</th>";
		echo "<th>". $Plant_level."</th>";
		echo "<th>". $Place."</th>";
		echo "<th>". $Temperature."</th>";
		echo "<th>". $Rainfall."</th>";
		echo "<th>". $Humility."</th>";
		echo "<th>". $USD."</th>";
		echo "<th>". $Fuel_Rate."</th>";
		echo "<th>". $Price."</th>";
		
		echo "</tr>";
		
	}
	?>
	</table>
  </div>


  <div class="right">
	
    <h2>About</h2>
    <p>This platform is a responsive website that is used to view the tea prices from the factors </p>
	<h2>Tea price prediction</h2>
	<p>The technologies and languages used to write the programs are HTML5, CSS3, JavaScript, PHP and MySQL. The system was developed using WAMPP server and PHPMyAdmin. The factors are trained by MATLAB code </p>
 </div>
</div>

<div class="footer">© 2018 copyright reserved. Develop by Subashini</div>

</body>
</html>
