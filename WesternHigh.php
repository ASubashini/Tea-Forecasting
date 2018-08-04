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
	    <h2>Western High</h2>
		<div class="">
			
				<?php
					//include_once 'dbh.php';
					$connection = mysqli_connect("localhost","root","","factors")
					or die("Could not connect to server");

					$db = mysqli_select_db($connection , "factors")
					or die("<b> Connection Fails");		
		
					$sql1 ="SELECT * FROM western_high";
					$result1 = mysqli_query($connection, $sql1);
					$price=array(0);
					$temp=array(0);
					$rain=array(0);
					$humility=array(0);
					$usd=array(0);
					$fuel=array(0);
					while ($row1 = mysqli_fetch_assoc($result1))     {
						array_push($price,$row1['Western_High']);
						array_push($temp,$row1['Average_Temperature']);
						array_push($rain,$row1['Average_Rainfall']);
						array_push($humility,$row1['Humility']);
						array_push($usd,$row1['USD']);
						array_push($fuel,$row1['Fuel_Rate']);
					}	

				?>
				<div id="chartContainer1"> </div>
				<br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/>
				<div id="chartContainer2"></div>
				<br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/>
				<div id="chartContainer3"></div>
				<br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/>
				<div id="chartContainer4"></div>
				<br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/>
				<div id="chartContainer5"></div>
				<br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/> <br/><br/> <br/>
				<div id="chartContainer6"></div>
				<br/> <br/> <br/>
				<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
				
				<script>
					window.onload=function () {
						var x1= <?php echo json_encode($price ); ?>;
						p1=[{ y:Number(x1[1])}];
						for(var i=2;i<x1.length;i++){
							p1.push({ y:Number(x1[i])});
						}
						var x2= <?php echo json_encode($temp ); ?>;
						p2=[{ y:Number(x2[1])}];
						for(var i=2;i<x2.length;i++){
							p2.push({ y:Number(x2[i])});
						}
						var x3= <?php echo json_encode($rain ); ?>;
						p3=[{ y:Number(x3[1])}];
						for(var i=2;i<x3.length;i++){
							p3.push({ y:Number(x3[i])});
						}
						var x4= <?php echo json_encode($humility ); ?>;
						p4=[{ y:Number(x4[1])}];
						for(var i=2;i<x4.length;i++){
							p4.push({ y:Number(x4[i])});
						}
						var x5= <?php echo json_encode($usd ); ?>;
						p5=[{ y:Number(x5[1])}];
						for(var i=2;i<x5.length;i++){
							p5.push({ y:Number(x5[i])});
						}
						var x6= <?php echo json_encode($fuel ); ?>;
						p6=[{ y:Number(x6[1])}];
						for(var i=2;i<x6.length;i++){
							p6.push({ y:Number(x6[i])});
						}
					var chart= new CanvasJS.Chart("chartContainer1", {
						animationEnabled: true,
						theme: "light2",
						title:{
							text: "Prices of Uva High"
						},
						axisY:{
							includeZero: false
						},
							data: [{        
						type: "line",       
							dataPoints: p1
						}]
					});
					chart.render();
					
					var chart= new CanvasJS.Chart("chartContainer2", {
						animationEnabled: true,
						theme: "line1",
						title:{
							text: "Factor 1: Temperature"
						},
						axisY:{
							includeZero: false
						},
							data: [{        
						type: "line",       
							dataPoints: p2,
							lineColor:"red"
						}]
					});
					chart.render();
					var chart= new CanvasJS.Chart("chartContainer3", {
						animationEnabled: true,
						theme: "line1",
						title:{
							text: "Factor 2: Rainfall"
						},
						axisY:{
							includeZero: false
						},
							data: [{        
						type: "line",       
							dataPoints: p3,
							lineColor:"red"
						}]
					});
					
					chart.render();
					var chart= new CanvasJS.Chart("chartContainer4", {
						animationEnabled: true,
						theme: "line1",
						title:{
							text: "Factor 3: Humility"
						},
						axisY:{
							includeZero: false
						},
							data: [{        
						type: "line",       
							dataPoints: p4,
							lineColor:"red"
						}]
					});
					chart.render();
					var chart= new CanvasJS.Chart("chartContainer5", {
						animationEnabled: true,
						theme: "line1",
						title:{
							text: "Factor 4: USD Rate"
						},
						axisY:{
							includeZero: false
						},
							data: [{        
						type: "line",       
							dataPoints: p5,
							lineColor:"red"
						}]
					});
					chart.render();
						var chart= new CanvasJS.Chart("chartContainer6", {
						animationEnabled: true,
						theme: "line1",
						title:{
							text: "Factor 5: USD Fuel Rate"
						},
						axisY:{
							includeZero: false
						},
							data: [{        
						type: "line",       
							dataPoints: p6,
							lineColor:"red"
						}]
					});
					chart.render();
					
					}
				</script>
				
				
			

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
