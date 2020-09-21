<?php2
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/LOGO.png" type="img/icon" rel="icon">
	<script type="text/javascript" src="jquery/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#btn').click(function(){
				$('#nav').slideToggle();
			});
		});
	</script>

</head>
<body>
	<div id="full">
		<div  style="background-image: url('img/bms.jpg');background-size: 100% 710px; width: 100%; height: 710px">
		<!-- <div style="background-image: url('img/bed.jpg');width:100%;height: 700px; "> -->
		<div id="header">
			<div id="logo">
				<h1><font color="white">My Project</font></h1>
			</div>
			<div><button id="btn">|||</button></div>
			<div id="nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="contact.php">Contect Us</a></li>
					<li><a href="index.php#box">BOOK MY STAY</a></li>
					<li><a href="index.php#ourr">Our Hotel</a></li>
					<li><a href="contect.php">Feedback</a></li>
					<li><a href="services.php">Services</a></li>
					<!-- <li><a href="#">Help</a></li> -->
				</ul>
			</div>
		</div>
		<div id="banner">
	

<br>
<br>
<br>
<br>	
<title>form</title>

<style type="text/css">
*
{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: helvetica;
 
}
body{
 background-image: url("g2.jpg");
 
}
.main
{
width: 500px;
margin: 50px auto;
border-radius: 10px;
border:3px solid #00CED1;
background-color: #fffaf0;
border-radius: 10px;
border-left: 20px solid #00CED1;
}
.info{
width: 100%;
padding: 5px;
background-color: #00CED1;
 
 
font-size: 20px;
font-weight: bold;
text-align: center;
color: #fff;
text-shadow: 1px 1px 2px #000;
 
}
.form-box
{
padding: 15px;
}
label
{
color: black;
font-size: 20px;
}
.inp,#msg-box{
width: 100%;
padding: 10px;
margin-bottom: 5px;
margin-top: 3px;
border:2px solid #00CED1;
border-radius: 5px;
font-weight: bold;
border-right: 5px solid #00CED1;
border-left: 10px solid #00CED1;
color: navy;
}
.inp:focus, #msg-box:focus{
outline: none;
border:2px solid navy;
border-right: 20px  solid navy;
border-left: 20px  solid navy;
}
#msg-box{
resize: none;
height: 80px;
}
.sub-btn
{
width: 100%;
padding: 10px;
margin-top: 5px;
border:none;
border-radius: 5px;
background-color: #00CED1;
/*background:linear-gradient(#00CED1,#800000);*/
}
.sub-btn:hover
{
background:linear-gradient(#800000,#dc133c);
} 
</style>

<div class="main">
<div class="info">Give your feedback</div>
				<!-- <form action="r1.php" method="post"> -->
<div id="banner"><br>
			<center><div style="background:rgba(255,255,255,.5); width: 80%;">
	       <form action="" method="post">
	       <table>
	       	<tr>
	       		<td width="50%" height="50px">Username</td>
	       		<td width="50%" height="50px"><input type="text" id="inp" name="name" placeholder="Enter Username" title="Enter Username"></td>
	       	</tr>
	       	<tr>
	       		<td width="50%" height="50px">Email</td>
	       		<td width="50%" height="50px"><input type="text" name="email" placeholder="Enter your email" title="Enter email"></td>
	       	</tr>
	       		<tr>
	       		<td width="50%" height="50px">Contact Number</td>
	       		<td width="50%" height="50px"><input type="text" name="phone" placeholder="Enter your Contact Number" title="Enter contact"></td>
	       	</tr>
	       		<tr>
	       		<td width="50%" height="50px">Message</td>
	       		<td width="50%" height="50px"><input type="text" id="msg-box" name="msg" placeholder="Enter your message here" title="Enter message"></td>
	       	</tr>
	      
	       	<tr>
	       		<td colspan="2"><input type="submit" name="submit" value="Send" style="width: 100%;height:  50px; border-radius: 30px;opacity: 0.8"></td>
	       	</tr>
	       </table>
	       </form>
	       <?php
           if(isset($_POST['submit']))
           {
           	     $name=$_POST['name'];
           	     $email=$_POST['email'];
           	     $phone=$_POST['phone'];
           	     $msg=$_POST['msg'];
           	    // $q1="select * from ss where ";
           	    // $run=mysqli_query($a,$q1);
           	    // $row=mysqli_fetch_array($run);
           	    //  $u=$row['un'];
           	    //  $p=$row['ps'];
           	     
        		if(mysqli_query($a,"insert into fb(name, email, phone, msg) value('$name','$email','$phone','$msg')"))
        		{
        		echo "Request Sent Successfully!";
        		}
           	     else
           	     {
           	     	echo "some error came...";
           	     }

           }
           
	       ?>	
	</div></center>
		</div>



</div>		
</br>
</br>
</br>
</br>
<div>

</ul>


</div>

		</div>
	</div>
	</div>
	</div>
  </div>
</body>

</html>