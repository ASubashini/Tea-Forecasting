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
  <h2>Predict the Tea Price</h2>
	<div class="container">
    <form action="PredictionProcess.php" method="post">
	<div class="errorMessage"><?php 
	if (isset($_GET["Pre"]))
	{
		if($_GET["Pre"]=="errordata")
		{
			echo "Error"; 
		}
		else if ($_GET["Pre"]=="success")
		{
			echo " Success ";
		}

			
	}?> </div>
    <div class="row">
      <div class="col-25">
        <label for="plantlevel">Plant Level</label>
      </div>
      <div class="col-75">
       <select  id="plantlevel" name="plantlevel">
  <option value="High">High</option>
  <option value="Medium">Medium</option>
  <option value="Low">Low</option>
</select>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="place">Place</label>
      </div>
	  <div class="col-75">
       <select  id="place" name="place">
  <option value="Uva">Uva</option>
  <option value="Western">Western</option>
</select>
      </div>
	  </div>

	  <div class="row">
      <div class="col-25">
        <label for="temp">Temperature (°C)</label>
      </div>
      <div class="col-75">
        <input type="number" id="temp" name="temp" placeholder="Enter the Temperature" required>
      </div>
    </div>
	  <div class="row">
      <div class="col-25">
        <label for="rainfall">Rainfall (mm)</label>
      </div>
      <div class="col-75">
        <input type="number" id="rainfall" name="rainfall" placeholder="Enter the your Rainfall" required>
      </div>
    </div>
	  <div class="row">
      <div class="col-25">
        <label for="humidity">Humidity</label>
      </div>
      <div class="col-75">
        <input type="number" id="humidity" name="humidity" placeholder="Enter the Humidity"  required>
      </div>
    </div>
  	  <div class="row">
      <div class="col-25">
        <label for="usd">USD Rate (Rs)</label>
      </div>
      <div class="col-75">
        <input type="number" id="usd" name="usd" placeholder="Enter the USD rate in LKR "  required>
      </div>
    </div>
	 <div class="row">
      <div class="col-25">
        <label for="fuel">Fuel</label>
      </div>
      <div class="col-75">
        <input type="number" id="fuel" name="fuel" placeholder="Enter the Fuel rate" required>
      </div>
    </div>

    <div class="row">
	<div class="col-75">
	    <input type="reset" value="Clear" id="clear" name="clear">
      <input type="submit" value="Predict" id="Predict" name="Predict">
   
    </div>
  </form>
  </div>	
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
