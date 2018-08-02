<!DOCTYPE html>
<html>
<head>
	<title>User Addition Server Page</title>
</head>
<body>

<?php
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
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

$NoRecords = mysqli_num_rows($result);
//echo NoRecords;
//echo password;
//echo rpassword;
if ($NoRecords >0)
	{
		
		header("Location: Register.php?Reg=erroreamil");
		exit();
		
	}

	else
	{
		if($password!=$rpassword)
		{
			header("Location: Register.php?Reg=errorpassword");	
			exit();
		}
		else 
		{
		$query = "INSERT INTO userdetails (`email`, `fname`, `lname`, `address`, `city`, `nic`, `tel`, `password`, `rpassword`) VALUES
		('$email','$fname','$lname','$address','$city','$nic','$tel','$password','$rpassword')";

		$result = mysqli_query($connection , $query);

		
		header("Location: Register.php?Reg=success");
		exit();
		}
	}

	mysqli_close($connection);

?>

</body>
</html>