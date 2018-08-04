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
  echo"</br>";
  echo $_SESSION['Email'];?> </h3>
  
  <h2>Edit Profile Details</h2>
	<div class="container">
    <form action="Edit.php" method="post">
	<div class="errorMessage"><?php if (isset($_GET["val"])){echo "*Login failed. Check your credentials and try again"; }?> </div>
    <div class="row">
      <div class="col-25">
        <label for="email">E-mail</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" placeholder="XXXX@gmail.com" readonly>
      </div>
    </div>
	  <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" placeholder="Enter the your First Name"   required>
      </div>
    </div>
	  <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" placeholder="Enter the your Last Name"  required>
      </div>
    </div>
	  <div class="row">
      <div class="col-25">
        <label for="address">Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="address" name="address" placeholder="Enter the Resident Address" required>
      </div>
    </div>
  	  <div class="row">
      <div class="col-25">
        <label for="city">City</label>
      </div>
      <div class="col-75">
        <input type="text" id="city" name="city" placeholder="Enter the Resident City"  required>
      </div>
    </div>
	 <div class="row">
      <div class="col-25">
        <label for="nic">NIC No</label>
      </div>
      <div class="col-75">
        <input type="text" id="nic" name="nic" placeholder="Enter the valid NIC No" pattern="[0-9]{9}[v]" readonly>
      </div>
    </div>
	 <div class="row">
      <div class="col-25">
        <label for="tel">Telephone No</label>
      </div>
      <div class="col-75">
        <input type="text" id="tel" name="tel" placeholder="1234567890" pattern="[0-9]{10}" required>
      </div>
    </div>
	 <div class="row">
      <div class="col-25">
        <label for="password">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="password" name="password" placeholder="Enter the valid Password" required>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="rpassword">Re-Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="rpassword" name="rpassword" placeholder="Enter the valid Re-Password" required>
      </div>
    </div>		 
   
    <div class="row">
	<div class="col-75">
      <input type="submit" value="Update" id="Update" name="Update">
    </div>
	 </div>
  </form>
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
