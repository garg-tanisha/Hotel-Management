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
               		<td>Name</td>
					<td><input type="text" name="name" placeholder="Enter Name" title="Name"></td>
				</tr>
				<tr>
					<td>Email_ID</td>
					<td><input type="text"  name="email"  placeholder="Enter your email" title="email"></td>
				</tr>
				
				<tr>
					<td>Contact Number</td>
					<td><input type="text" name="phone"  placeholder="Enter your phone number" title="phone no"></td>
				</tr>
				<tr>
					<td>Message</td>
					<td><textarea name="msg" id="msg-box" placeholder="enter your message here...." title="message"></textarea></td>
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
        			header("Location:f1.php");
        		}
        		else
        		{
        			echo "feedback not filled yet";
        		}
       }
       
		?>			</div>
		</div>
	</div>
	</div>
	
  </div>
</body>

</html>