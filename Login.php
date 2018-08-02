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
	<a href="Login.php">Login</a>
	<a href="Register.php">Registration</a>
  </div>

  <div class="main">
  <h2>Login</h2>
	<div class="container">
    <form action="LoginProcess.php" method="post">
	<div class="errorMessage"><?php
	if (isset($_GET["Login"]))
	{
		if($_GET["Login"]=="errornotfound")
		{
			echo "Invalid Email & Password"; 
		}
		else if ($_GET["Login"]=="loginsuccess")
		{
			echo " Successfully assigned ";
		}
		else if($_GET["Login"]=="loginerror")
		{
			echo" Invalid Username & Password";
		}
			
	}
	?> </div>
    <div class="row">
      <div class="col-25">
        <label for="email">Email ID</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" placeholder="xxxxxx@gmail.com" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="password">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="password" name="password" placeholder="Valid Password" required>
      </div>

    </div>		 
    </div>
	<a href="ForgotPassword.php">Forgot password</a>
    <div class="row">
	<div class="col-75">
      <input type="submit" value="Login" id="login" name="login">
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


