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

    <a href="">Home</a>
	<a href="ViewDetail.php">View Profile Details</a>
	<a href="EditDetails.php">Edit Profile Details</a>
	<a href="">View System assign Details</a>
    <a href="">Logout</a>
  </div>

  <div class="main">
  <h2>Predict the Tea Price</h2>
	<div class="container">
    <form action="login_process.php" method="post">
	<div class="errorMessage"><?php if (isset($_GET["val"])){echo "*Login failed. Check your credentials and try again"; }?> </div>
    <div class="row">
      <div class="col-25">
        <label for="plantlevel">Plant Level</label>
      </div>
      <div class="col-75">
        <input list="plantlevel"  placeholder="Enter the Plant Level" required>
		<datalist id="plantlevel">
  <option value="High">
  <option value="Medium">
  <option value="Low">

</datalist>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="place">Place</label>
      </div>
       <input list="place"  placeholder="Enter the Place" required>
		<datalist id="place">
  <option value="Uva">
  <option value="Western">

</datalist>
      </div>
	  <div class="row">
      <div class="col-25">
        <label for="temp">Temperature (°C)</label>
      </div>
      <div class="col-75">
        <input type="text" id="temp" name="temp" placeholder="Enter the Temperature" pattern="[0-9]"required>
      </div>
    </div>
	  <div class="row">
      <div class="col-25">
        <label for="rainfall">Rainfall (mm)</label>
      </div>
      <div class="col-75">
        <input type="text" id="rainfall" name="rainfall" placeholder="Enter the your Rainfall" pattern="[0-9]" required>
      </div>
    </div>
	  <div class="row">
      <div class="col-25">
        <label for="humidity">Humidity</label>
      </div>
      <div class="col-75">
        <input type="text" id="humidity" name="humidity" placeholder="Enter the Humidity" pattern="[0-9]" required>
      </div>
    </div>
  	  <div class="row">
      <div class="col-25">
        <label for="usd">USD Rate (Rs)</label>
      </div>
      <div class="col-75">
        <input type="text" id="usd" name="usd" placeholder="Enter the USD rate in LKR " pattern="[0-9]" required>
      </div>
    </div>
	 <div class="row">
      <div class="col-25">
        <label for="fuel">Fuel</label>
      </div>
      <div class="col-75">
        <input type="text" id="fuel" name="fuel" placeholder="Enter the Fuel rate" pattern="[0-9]"} required>
      </div>
    </div>
	 <div class="row">
      <div class="col-25">
        <label for="price">Tea Price</label>
      </div>
      <div class="col-75">
        <input type="text" id="price" name="price"  readonly>
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
