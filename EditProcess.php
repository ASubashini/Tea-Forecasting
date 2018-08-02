<!DOCTYPE html>
<html>
<head>
	<title>User Addition Server Page</title>
</head>
<body>

<?php
$fname = $_POST['fname'];
$lname = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$nic = $_POST['nic'];
$tel = $_POST['tel'];
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];

$connection = mysqli_connect("localhost","root","","factors")
or die("Could not connect to server");

$db = mysqli_select_db($connection , "factors")
or die("<b> Connection Fails");

//server validation

$query = "SELECT * FROM userdetails WHERE email = '$email'";
$result = mysqli_query($connection , $query);


if($query_results = mysqli_query($connection,$query))
{
	if($row = mysqli_fetch_array($result))
	{
		echo"<b><i> User Name is already exists<br><a href = 'Register.php'>

		Click Here </a></i>";
	}

	else
	{
		$query = "UPDATE $userdetails SET  fname= '$fname',name='$lname',address='$address',city='$city',nic='$nic',tel='$tel',password='$password',rpassword='$rpassword WHERE email = '$email'";
		$result = mysqli_query($connection , $query);

		//if($query_results = mysqli_fetch_array($result))
		
		echo "<b><i><center>User Record Updated</center></i></b><p>";
	}

	}

	else{
	echo mysqli_connect_error();

}
	


	mysqli_close($connection);

?>

</body>
</html>