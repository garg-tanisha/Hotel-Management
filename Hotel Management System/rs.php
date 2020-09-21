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
		<div id="bg" style="background-image: url('img/bbd.jpg'); height: 1780px; background-repeat: repeat-y;">
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
					<li><a href="services.php">Services</a></li>
					<li><a href="#t1">Request R. Service</a></li>
					<!-- <li><a href="#">Help</a></li> -->
				</ul>
			</div>
		</div>
		<div id="banner">
			
</br>
</br>
</br>
</br>

<div class="bg-img">
<h1 style="margin-left:600px;text-align:center,font-size:200px;font-style:italic; color: white"><b>Room Services</b></h1>

<ul>
<img src="img/rs1.png" alt="Trulli" width=45% height="300" style="float: left; margin-right: 20px; margin-left: 26px ;margin-bottom: 5px; border: solid black 1px; padding: 2px" ></img>
<img src="img/rs2.png" alt="Trulli" width=45% height="300" style="float: left; margin-right: 20px; margin-bottom: 5px; border: solid black 1px; padding: 2px" ></img> 
<br> <br>
<!-- <center> -->
 <p style="font-size:20px; margin-left: 380px; color: white">
 	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
1.Free Wi-Fi</br>
2.Blackout curtains-Rs.100</br>
3.Coffee and tea facilities-Rs.150</br>
4.Hairdryer-Rs.150</br>
5.Safe box-Rs.80</br>
6.Desk and chair-Rs.100</br>
7.Bathtub or shower-Rs.90 </br>
8.Telephone-Rs.100 </br>
9.Radio-Rs.100</br>
10.Iron with ironing board-Rs.350</br>
11.LCD / LED Television with Satellite Channels-Rs.150</br>
12.Telephone With Direct Dial-Rs.200</br>
13.iPod docking station with radio-Rs.350</br>
14.Adapters and Extension Cable on Request-Rs.300</br>
15.Mini Bar / Mini Fridge-Rs.600</br>
16.Electronic Safe / Locker-Rs.500</br>

 </p>
 <!-- </center> -->
 </ul>
 <br> <br> 
<img src="img/service2.jpg" alt="Trulli" width=30% height="300" style="float: left; margin-right: 20px; margin-left: 35px; margin-bottom: 5px; border: solid black 1px; padding: 2px" ></img>
<img src="img/service3.jpg" alt="Trulli" width=30% height="300" style="float: left; margin-right: 20px; margin-bottom: 5px; border: solid black 1px; padding: 2px" ></img>
<img src="img/rs3.png" alt="Trulli" width=30% height="300" style="float: left; margin-right: 20px; margin-bottom: 5px; border: solid black 1px; padding: 2px" ></img>
<!-- <center><p style="font-size: 60px; font-weight: bold;" ><br><br>NEED SOME SERVICE? </p></center> -->
<!-- <br><br><br><br> -->
<!-- <br><br><br> 
<br> <br> <br> <br> 
 --></div>



<a name="t1"></a> 
<center>
<p><br></p>
<h1 style="color: yellow"> NEED SOME SERVICE? </h1>
</center>
<!-- </body> -->
<div id="banner"><br>
			<center><div style="background:rgba(255,255,255,.5); width: 80%;">
	       <form action="" method="post">
	       <table>
	       	<tr>
	       		<td width="50%" height="50px">Username</td>
	       		<td width="50%" height="50px"><input type="text" name="un" placeholder="Enter Username" title="Enter Username" required></td>
	       	</tr>
	       	<tr>
	       		<td width="50%" height="50px">ID Number</td>
	       		<td width="50%" height="50px"><input type="text" name="id" placeholder="Enter ID number" title="Enter ID number" required></td>
	       	</tr>
	       	<tr>
					<td>Room-Service required</td>
					<td><select name="service" required>
						<option>--select--</option>
						<option>Electronic Safe / Locker</option>
						<option>Mini Bar / Mini Fridge</option>
						<option>Adapters and Extension Cable on Request</option>
						<option>iPod docking station with radio</option>
						<option>Telephone With Direct Dial</option>
						<option>LCD / LED Television with Satellite Channels</option>
						<option>Iron with ironing board</option>
						<option>Radio</option>
						<option>Electronic Safe / Locker</option>
						<option>Bathtub or shower</option>
						<option>Desk and chair</option>
						<option>Safe box</option>
						<option>Hairdryer</option>
						<option>Coffee and tea facilities</option>
						<option>Blackout curtains</option>
					</select></td>
				</tr>
	       		<tr>
	       		<td width="50%" height="50px">Suggestions</td>
	       		<td width="50%" height="50px"><input type="text" name="sug" placeholder="Enter Suggestions if any" title="Enter  Suggestions if any" required></td>
	       	</tr>
	       	<tr>
	       		<td colspan="2"><input type="submit" name="submit" value="Send" style="width: 100%;height:  50px; border-radius: 30px;opacity: 0.8"></td>
	       	</tr>
	       </table>
	       </form>
	       <?php
	        $a=mysqli_connect('localhost','root','','hd');
           if(isset($_POST['submit']))
           {
           	     $un=$_POST['un'];
           	     $id=$_POST['id'];
           	     $service=$_POST['service'];
           	     $sug=$_POST['sug'];
           	    // $q1="select * from ss where ";
           	    // $run=mysqli_query($a,$q1);
           	    // $row=mysqli_fetch_array($run);
           	    //  $u=$row['un'];
           	    //  $p=$row['ps'];
           	     
        		if(mysqli_query($a,"insert into rs(un, id, service, sug) value('$un','$id','$service','$sug')"))
        		{
        			echo "Request Sent Successfully!";
        		}
           	     else
           	     {
           	     	echo "some error came...";
           	     }
        		// 	header("Success");// mysqli_query($a,"update room set status='Book' where rno=$rno");
        		// 	header("Location:fi.php");

        		// }
          //  	     // if($un==$u&& $ps==$p)
          //  	     // {
          //  	     // 	header("Location:ii.php");
          //  	     // }
          //  	     else
          //  	     {
          //  	     	header("Some error came...");
          //  	     }

           }
           
	       ?>	
	</div></center>
		</div>
		</div>
	</div>
	</div>
	</div>
  </div>
</body>

</html>