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
    <h2>System Overview</h2>
	
	 <div class="container">
    <h3><p>The major functionalities of this system are provided below:</p></h3>
	<p>Functionality 1: The User should be able to login to the system. </p>
	<p>Functionality 2: The User should be able to view the profile. </p>
	<p>Functionality 3: The User should be able to create the login.</p>
    <p>Functionality 4: The User should be able to view the price history in the graph.</p>	
	<p>Functionality 5: The User should be able to view the login history.</p>
	<p>Functionality 6: The User should be able to do the price prediction.</p>
  </div>
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
