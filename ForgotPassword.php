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

    <a href="HomePage.php">Home</a>
	<a href="Login.php">Login</a>
  </div>

  <div class="main">
  <h2>Forgot Password</h2>
	<div class="container">
    <form action="login_process.php" method="post">
	<div class="errorMessage"><?php if (isset($_GET["val"])){echo "*Login failed. Check your credentials and try again"; }?> </div>
    <div class="row">
      <div class="col-25">
        <label for="email">E-mail</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" placeholder="xxxxxx@gmail.com" required>
      </div>
    </div>	 
    </div>
    <div class="row">
	<div class="col-75">
      <input type="submit" value="Submit" id="submit" name="submit">
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


