<!DOCTYPE html>
<html>
<head>
	<title>DB Connection</title>
</head>
<body>
<?php
$connection = mysqli_connect("localhost","root","","factors")
or die("Could not connect to server");

$db = mysqli_select_db($connection , "factors")
or die("<b> Connection Fails");

mysqli_close($connection);

?>

</body>
</html>