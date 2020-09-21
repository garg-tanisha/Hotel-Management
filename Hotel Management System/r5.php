<?php2
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
<!--   <script type="text/javascript" src="jquery/jquery.js"></script>
	   <script>
	    $(document).ready(function(){
      $('#btn').click(function(){
        $('#nav').slideToggle();
      });
    });
  </script> -->
</head>
<body>
	<div id="full">
		<div id="bg" style="background-image: url('img/bed.jpg'); height: 1200px;">
		<div id="header">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="contact.php">Contect Us</a></li>
					<li><a href="index.php#box">BOOK MY STAY</a></li>
					<li><a href="index.php#ourr">Our Hotel</a></li>
					<li><a href="services.php">Services</a></li>
					<!-- <li><a href="#">Help</a></li> -->
				</ul>
			</div>
		</div>
		<div id="banner">
			<div id="form">
				<form action="r1.php" method="post">
			<table style="color: black; font-weight: bold; font-size: 15px">
				
               	<tr>
					<td>Status</td>
					<td><input type="text" name="Status" value="Available" disabled="disabled" title="Status"></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" placeholder="Enter Name" title="Name"></td>
					<td>ID no.</td>
					<td><input type="text" name="idno" placeholder="Enter ID" title="ID"></td>
				</tr>
				
				<tr>
					<td>City</td>
					<td><input type="text" name="city" placeholder="Enter City" title="city"></td>
				</tr>
				<tr>
					<td>District</td>
					<!-- <td><input type="text" name="dis" placeholder="Enter District" title="district"></td> -->
					<td><select name="dis">
						<option>--select--</option>
						<option>Mumbai</option>
						<option>Delhi</option>
						<option>Bengrulu</option>
					</select></td>
				</tr>
				<tr>
					<td>State</td>
					<!-- <td><input type="text" name="state" placeholder="Enter State" title="state"></td> -->
					<td><select name="state">
						<option>--select--</option>
						<option>Maharashtra</option>
						<option>Delhi</option>
						<option>A.P</option>
					</select></td>
				</tr>
				<tr>
					<td>Enter E-mail</td>
					<td><input type="text" name="email" placeholder="Enter E-mail" title="E-mail"></td>
				</tr>
				<tr>
					<td>Checkin date</td>
					<td><input type="text" name="coin" placeholder="Enter checkin date" title="Check in"></td>
					<td>Check out</td>
					<td><input type="text" name="coout" placeholder="Enter checkout date"title="Check out"></td>
				</tr>
				<tr>
					<td>Enter Members</td>
					<td><input type="text" name="members" placeholder="Enter Members" title="Members"></td>
				</tr>
				<td>
					<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit" value="SUBMIT"></td>
				</td>

				
			</table>
		</form>
		<?php
        if(isset($_POST['submit']))
        {
        	$name=$_POST['name'];
        	$idno=$_POST['idno'];
            $city=$_POST['city'];
        	$dis=$_POST['dis'];
        	$state=$_POST['state'];
           $email=$_POST['email'];
            $coin=$_POST['coin'];
        	$coout=$_POST['coout'];
        		$m=$_POST['members'];


        		if(mysqli_query($a,"insert into form(name,city,dis,email,state,cidate,codate,m,idno) value('$name','$city','$dis','$email','$state','$coin','$coout','$m','$idno')"))
        		{
        			mysqli_query($a,"update room set status='Book' where rno=$rno");
        			header("Location:fi.php");
        		}
        		else
        		{
        			echo "data not insert";
        		}
       }
       
		?>			</div>
		</div>
	</div>
	</div>
	
  </div>
</body>

</html>