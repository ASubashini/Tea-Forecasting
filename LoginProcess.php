<!DOCTYPE html>
<html>

<body>
<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$connection = mysqli_connect("localhost","root","","factors")
or die("Could not connect to server");

$db = mysqli_select_db($connection , "factors")
or die("<b> Connection Fails");

//server validation

$query = "SELECT * FROM userdetails WHERE email = '$email'";
$result = mysqli_query($connection , $query);

$NoRecords = mysqli_num_rows($result);
if ($NoRecords <1)
	{
		
		header("Location: Login.php?Login=errornotfound");
		exit();
		
	}
	else
	{
		$row = mysqli_fetch_array($result);
		$password1 = $row['password'];
		if($password1 == $password)
		{
			$_SESSION['Email'] =$email;
			$_SESSION['Name'] =$row['fname'] . "  " . $row['lname'];
			
			$query = "INSERT INTO userlog (email, logintime) VALUES ('$email',NOW())";


			$result = mysqli_query($connection , $query);
			
			header("Location: HomeLogin.php?Login=loginsuccess");
			
			exit();
		}

		else
		{
			header("Location: Login.php?Login=loginerror");
			exit();
		}
	}


	mysqli_close($connection);

?>
</body>
</html>