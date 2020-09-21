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
		<div id="bg" style="background-image: url('img/bbd.jpg'); height: 1520px; background-repeat: repeat-y;">
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
					<li><a href="#t2">Request Reception</a></li>
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
<h1 style="margin-left:600px;color: white; text-align:center,font-size:200px;font-style:italic"><b>Reception Services</b></h1>
<ul>
 <img src="img/restaurant3.jpg" alt="Trulli" width=30% height="300" style="float: left; margin-right: 20px; margin-bottom: 5px; border: solid black 1px; padding: 2px" ></img>
 <img src="img/restaurant4.jpg" alt="Trulli" width=30% height="300" style="float: left; margin-right: 20px; margin-bottom: 5px; border: solid black 1px; padding: 2px" ></img>
 <img src="img/restaurant6.jpg" alt="Trulli" width=30% height="300" style="float: left; margin-right: 20px; margin-bottom: 5px; border: solid black 1px; padding: 2px" ></img>
<p style="font-size:20px ; color: white; margin-left: 380px; ">
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
1.24-hour reception</br>
2.Tea and coffee facilities in all rooms=Rs.700</br>
3.Wake-up call=Rs.450</br>
4.Hairdryer=Rs.600</br>
5.Car hire=Rs.1000</br>
6.Bicycle hire=Rs.150</br>
7.Laundry and dry cleaning=Rs.300</br>
8.Option to borrow a fridge for the room=Rs.500</br>
9.Own parking space=Rs.50</br></br>
</p>

<img src="img/restaurant1.jpg" alt="Trulli" width=45% height="300" style="float: left; margin-right: 20px; padding-bottom: 10px;margin-left: 26px ;margin-bottom: 5px; border: solid black 1px; padding: 2px" ></img>
<img src="img/bed.jpg" alt="Trulli" width=45% height="300" style="float: left; padding-bottom: 10px;  margin-right: 20px; margin-bottom: 5px; border: solid black 1px; padding: 2px" ></img> 

 </ul>
 <br> <br> <br> <br> 
</div>

<a name="t2"></a> 
<center>
<h1 style="color: yellow;"> HAVE SOME QUERY? </h1>
</center>
<!-- </body> -->

<div id="banner"><br>
			<center><div style="background:rgba(255,255,255,.5); width: 80%;">
	       <form action="" method="post">
	       <table>
	       	<tr>
	       		<td width="50%" height="50px">Username</td>
	       		<td width="50%" height="50px"><input type="text" name="un" placeholder="Enter Username" title="Enter Username"></td>
	       	</tr>
	       	<tr>
	       		<td width="50%" height="50px">ID Number</td>
	       		<td width="50%" height="50px"><input type="text" name="id" placeholder="Enter ID number" title="Enter ID number"></td>
	       	</tr>
	       	<tr>
					<td>Room-Service required</td>
					<td><select name="rservice">
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
	       		<td width="50%" height="50px"><input type="text" name="sug" placeholder="Enter Suggestions if any" title="Enter  Suggestions if any"></td>
	       	</tr>
	       	<tr>
	       		<td colspan="2"><input type="submit" name="submit" value="Send" style="width: 100%;height:  50px; border-radius: 30px;opacity: 0.8"></td>
	       	</tr>
	       </table>
	       </form>
	       <?php
	        $a=mysqli_connect('localhost','root','','hd');
                 $q1="select * from rec_menu where ser_name='rservice";
                 $run=mysqli_query($a,$q1);
                 while($row=mysqli_fetch_array($run))
                 {
                 	$price=$row['price']; 
                ?>

                <tr>
					<td width="10%" height="50px"><center><?php echo $price; ?></center></td>
					
				</tr>
				<?php
				  }
				?>



				 <?php
	       $a=mysqli_connect('localhost','root','','hd');	
				if(isset($_POST['submit']))
           {
           	     $un=$_POST['un'];
           	     $id=$_POST['id'];
           	     $rservice=$_POST['rservice'];
           	     $sug=$_POST['sug'];
           	     $price=$_POST['bill'];

           	    <!-- $q1="select * from rec_menu where ser_name='rservice'"; -->
           	    <!-- // echo "q1"; -->
           	    <!-- $run=mysqli_query($a,$q1); -->
           	    <!-- $row=mysqli_fetch_array($run); -->
           	     <!-- $price=$row['price']; -->
           	    <!-- //  $p=$row['ps']; -->
           	     <!-- // echo "$bill"; -->
        		if(mysqli_query($a,"insert into reception(un, id, rservice, sug, bill) value('$un','$id','$rservice','$sug','$price')"))
        		{
        			//header("Success");// mysqli_query($a,"update room set status='Book' where rno=$rno");
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
	</div>
	</div>
	</div>
  </div>
</body>

</html>