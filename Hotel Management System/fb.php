<?php2
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
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
			<div id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="contact.php">Contect Us</a></li>
					<li><a href="index.php#box">BOOK MY STAY</a></li>
					<li><a href="index.php#ourr">Our Hotel</a></li>
					<!-- <li><a href="#">Help</a></li> -->
				</ul>
			</div>
		</div>
		<div id="banner">
			<div id="form">
				<form action="r1.php" method="post">
			<table style="color: black; font-weight: bold; font-size: 20px">
				
            <!--    	<tr>
					<td>Status</td>
					<td><input type="text" name="Status" value="Available" disabled="disabled" title="Status"></td>
				</tr> -->
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" placeholder="Enter Name" title="Name"></td>
					<td>ID no.</td>
					<td><input type="text" name="email" placeholder="Enter email id" title="email"></td>
				</tr>
				
				<tr>
					<td>City</td>
					<td><input type="text" name="phone" placeholder="Enter Contact Number" title="phone"></td>
		</tr>
				<tr>
					<td>District</td>
					<td><input type="text" name="msg-box" placeholder="Enter District" title="message"></td>
					<!-- <td><select name="dis">
						<option>--select--</option>
						<option>Mumbai</option>
						<option>Delhi</option>
						<option>Bengrulu</option>
					</select></td> -->
				</tr>
				
				<td>
					<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit" value="SUBMIT"></td>
				</td>
				
				
			</table>
		</form>
		<?php
        if(isset($_POST['submit']))
        {

        	$a=mysqli_connect('localhost','root','','hd');
        if(isset($_POST['submit']))
        {
        	$name=$_POST['name'];
        	$email=$_POST['email'];
            $phone=$_POST['phone'];
        	$msg =$_POST['msg'];


        		if(mysqli_query($a,"insert into fb(name,email,phone,msg-box) value('$name','$email','$phone','$msg')"))
        		{
        			//mysqli_query($a,"update room set status='Book' where rno=$rno");
        			header("Location:f2.php");
        		}
        		else
        		{
        			echo "feedback not filled yet";
        		}
       }
       
		?>	</div>
		</div>
	</div>
	</div>
	
  </div>
</body>

</html>
