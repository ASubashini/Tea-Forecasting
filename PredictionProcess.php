<!DOCTYPE html>
<html>
<head>
	<title>User Addition Server Page</title>
</head>
<body>

<?php
session_start();
$email = $_SESSION['Email'];
$plantlevel = $_POST['plantlevel'];
$place = $_POST['place'];
$temp = $_POST['temp'];
$rainfall = $_POST['rainfall'];
$humidity = $_POST['humidity'];
$usd = $_POST['usd'];
$fuel = $_POST['fuel'];


$connection = mysqli_connect("localhost","root","","factors")
or die("Could not connect to server");

$db = mysqli_select_db($connection , "factors")
or die("<b> Connection Fails");

//server validation

//$query = "SELECT * FROM log WHERE Email = '$email'";

//$result = mysqli_query($connection , $query);

//$NoRecords = mysqli_num_rows($result);
//echo NoRecords;
//echo password;
//echo rpassword;
//if ($NoRecords >0)
	//{
		
		//header("Location: Prediction.php?Pre=errordata");
		//exit();
		
	//}

	//else
	//{ 
		echo $plantlevel;

$query = "INSERT INTO log (Email, Timestamp, Plant_level, Place, Temperature, Rainfall,Humility , USD, Fuel_Rate, Price) VALUES ('$email',NOW(),'$plantlevel','$place','$temp','$rainfall','$humidity','$usd','$fuel','0')";
		

		$result = mysqli_query($connection , $query);

		
header("Location: PredictionDetails.php?Pre=success");
		exit();
	//}

	mysqli_close($connection);

?>

</body>
</html>