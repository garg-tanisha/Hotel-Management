<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>BMS</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
</head>
<body>
	<div id="full">
		<div  style="background-image: url('img/bms.jpg');background-size: 100% 710px; width: 100%; height: 710px">
		<div id="header">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div id="cl"><input type="button" name="btn" id="btn"></div>
			<div id="nav">
				<ul id="a1">
					<li><a href="index.php">Home</a></li>
					<li><a href="contact.php">Contect Us</a></li>
					<li><a href="index.php#box">BOOK MY STAY</a></li>
					<li><a href="index.php#ourr">Our Hotel</a></li>
					<li><a href="services.php">Services</a></li>
					<!-- <li><a href="#">Help</a></li> -->
				</ul>
			</div>
		</div>
		<div id="banner"><br><br><br><br><br><br><br><br><br><br>
			<center><div style="background:rgba(255,255,255,.5); width: 60%;height: 300px;">
				<br>
				<a href="rs.php"><center><h2 align="center" style="color: red;padding: 10px; top: 50%; font-size: 30px;s">ROOM SERVICES</h2></a>
			<!-- 	<a href="#"><h3 align="left" style="color: green">Hotels</h3></a>
                <a href="#"><h3 align="left" style="color: green">Corporate Office</h3></a>
                <a href="#"><h3 align="left" style="color: green">Global Sales Office</h3></a> -->
               <a href="food.php"><h2 align="center" style="color: red;padding: 10px;font-size: 30px;top: 50%;s"> RESTAURANT SERVICES</h2></a>
<!--                 <a href="#"><h3 align="left" style="color: green">Hotel feedback and suggestions</h3></a>
                <a href="#"><h3 align="left" style="color: green">Website feedback and suggestions</h3></a> -->
		    <a href="reception.php"><h2 align="center" style="color: red;padding: 10px;font-size: 30px;top: 50%; s"> RECEPTION SERVICES</h2></a>
		     </div>
		     </center>
		</div>	
	</center>
	</div>
  </div>
</body>

</html>