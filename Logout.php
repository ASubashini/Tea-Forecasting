<?php
session_start();
$email=$_SESSION['Email'];

	$connection = mysqli_connect("localhost","root","","factors")
or die("Could not connect to server");

$db = mysqli_select_db($connection , "factors")
or die("<b> Connection Fails");

$query = "UPDATE `userlog` SET `logouttime` = NOW() WHERE `Email` ='".$email."' AND logouttime IS NULL";

echo $query;		

$result = mysqli_query($connection , $query);


$_SESSION['Email'] ="";
$_SESSION['Name'] ="";		
 
header("Location: HomePage.php");

 ?>