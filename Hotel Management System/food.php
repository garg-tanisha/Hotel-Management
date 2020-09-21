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
		<div id="bg" style="background-image: url('img/bbd.jpg'); height: 2580px; background-repeat: repeat-y;">
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
					<li><a href="#ffff">Order Food</a></li>
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
<h1 style="margin-left:600px;text-align:center,font-size:200px;font-style:italic; color: white"><b>Food Menu</b></h1>
<br>
<ul>
 <img src="img/1.jpg" alt="Trulli" width="500" height="300" style="float: left; margin-right: 20px; margin-bottom: 5px; border: solid black 1px; padding: 2px" ></img>
 <h2 style="color: yellow"> Indian Dishes</h2>
 <p style="font-size:20px ; color: white ">
 Dal Makhani   -  Rs.81</br>
 Rajma chawal  -  Rs.120</br>
 Malai kofta   -  Rs.250</br>
 Pani puri     -  Rs.100</br>
Cheese naan with gravy - Rs.90</br>
Chana Masala - Rs.81</br>
Bhartha - Rs.90</br>
Aloo Jeera - Rs.117</br>
Matar Paneer - Rs.117</br>
 </p>
 </ul>
 <br> <br> <br> <br> <br>
 <ul>
 <img src="img/2.jpg" alt="Trulli" width="500" height="300" style="float: right; margin-right: 20px; margin-bottom: 5px; border: solid black 1px; padding: 2px" ></img>
  <h2 style="margin-left: 370px; color: yellow">Fast Food</h2>
 <p style="font-size:20px ; color: white; margin-left: 370px;  ">
 Burger   -   Rs.90</br>
 Pizza    -   Rs.300</br>
 Noodles  -   Rs.50(half plate)</br>
 Noodles  -	  Rs.100(Full plate)</br>
 Fries - Rs.150</br>
Sandwich - Rs.100</br>
Maggi - Rs.50</br>
 Pasta    -   Rs.150</br></p>
 </ul>
 
 <br> <br> <br> <br> <br><br>

 <ul>
 <img src="img/3.jpg" alt="Trulli" width="500" height="300"  style="float: left; margin-right: 20px; margin-bottom: 5px; border: solid black 1px; padding: 2px" ></img>
 <h2 style="color: yellow">Beverages</h2>
<p style="font-size:20px ; margin-left:100px; color: white ">
Curd  			  -  Rs.20</br>
Sweet lassi  	  -  Rs.27</br>
Oreo Shake  	  -  Rs.30</br>
Mango Shake  	  -  Rs.50</br>
Kesar Badam Milk  -  Rs.60</br>
Milk - Rs.40</br>
Fruit Drink - Rs.90</br>
Coffee - Rs.120</br>
<!-- Alcoholic Beverages=Rs.499 -->
Soda - Rs.55</br>
</p>

 </ul>
<br> <br> <br> <br> <br>
 <ul>
 <img src="img/4.jpg" alt="Trulli" width="500" height="300" style="float: right; margin-right: 20px; margin-bottom: 5px; border: solid black 1px; padding: 2px" ></img>
<h2 style="margin-left: 370px; color: yellow">Bengali Sweets</h2>
<p style="font-size:20px ; margin-left: 370px; color: white">
Rasgulla  	 -  Rs.119</br>
Gulab jamun  -  Rs.30</br>
Chana Murki Sweets  -  Rs.36</br>
Jalebi	 	 -  Rs.80</br>
Cham Cham    -  Rs.45</br>
Mohan Bhog - Rs.250</br>
Lobongo Latika - Rs.350</br>
Bhapa Doi - Rs.400</br>
Nolen Gurer Payesh - Rs.600</br>
Pati Shapta - Rs.300</br>
</p>
 </ul>

<br> <br> <br> <br> 
</div>

<a name="ffff"></a> 
<center>
<h1 style="color: yellow"> WANNA ORDER FOOD? </h1>
</center><!-- form -->

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
					<td width="50%" height="50px">Item 1</td>
					<td width="50%" height="50px"><select name="service1" required>
						<option>--select--</option>
						<option>Dal Makhani</option>
						<option> Rajma chawal</option>
						<option>Malai kofta</option>
						<option>Burger</option>
						<option> Pizza</option>
						<option>Noodles (half plate)</option>
						<option>Noodles (full plate)</option>
						<option>Curd</option>
						<option>Sweet lassi</option>
						<option>Bathtub or shower</option>
						<option>Oreo Shake</option>
						<option>Mnago Shake</option>
						<option>Chana Murki Sweets</option>
						<option>Rasgulla</option>
						<option>Gulab jamun</option>
					</select></td>
				</tr>
					<tr>
					<td width="50%" height="50px" style="padding: 5px; ">Quantity of Item 1</td>
					<td width="50%" height="50px"><select name="item1" required>
						<option>--select--</option>
						<!-- <option>0</option> -->
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>10</option>
						<option>15</option>
						<option>25</option>
						<option>30</option>
						<option>50</option>
						<option>100</option>
					</select></td>
				</tr>
				<tr>
					<td width="50%" height="50px">Item 2</td>
					<td width="50%" height="50px"><select name="service2" required>
						<option>--select--</option>
						<option>Dal Makhani</option>
						<option> Rajma chawal</option>
						<option>Malai kofta</option>
						<option>Burger</option>
						<option> Pizza</option>
						<option>Noodles (half plate)</option>
						<option>Noodles (full plate)</option>
						<option>Curd</option>
						<option>Sweet lassi</option>
						<option>Bathtub or shower</option>
						<option>Oreo Shake</option>
						<option>Mnago Shake</option>
						<option>Chana Murki Sweets</option>
						<option>Rasgulla</option>
						<option>Gulab jamun</option>
					</select></td>
				</tr>
				<tr>
					<td width="50%" height="50px">Quantity of Item 2</td>
					<td width="50%" height="50px"><select name="item2" required>
						<option>--select--</option>
						<!-- <option>0</option> -->
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>10</option>
						<option>15</option>
						<option>25</option>
						<option>30</option>
						<option>50</option>
						<option>100</option>
					</select></td>
				</tr>
				<tr>
					<td width="50%" height="50px">Item 3</td>
					<td width="50%" height="50px"><select name="service3" required>
						<option>--select--</option>
						<option>Dal Makhani</option>
						<option> Rajma chawal</option>
						<option>Malai kofta</option>
						<option>Burger</option>
						<option> Pizza</option>
						<option>Noodles (half plate)</option>
						<option>Noodles (full plate)</option>
						<option>Curd</option>
						<option>Sweet lassi</option>
						<option>Bathtub or shower</option>
						<option>Oreo Shake</option>
						<option>Mnago Shake</option>
						<option>Chana Murki Sweets</option>
						<option>Rasgulla</option>
						<option>Gulab jamun</option>
					</select></td>
				</tr>
					<tr>
					<td width="50%" height="50px">Quantity of Item 3</td>
					<td width="50%" height="50px"><select name="item3" required>
						<option>--select--</option>
						<!-- <option>0</option> -->
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>10</option>
						<option>15</option>
						<option>25</option>
						<option>30</option>
						<option>50</option>
						<option>100</option>
					</select></td>
				</tr>
	       		<tr>
	       		<td width="50%" height="50px">Suggestions</td>
	       		<td width="50%" height="50px"><input type="text" name="sug" placeholder="Enter Suggestions if any" title="Enter  Suggestions if any" required></td>
	       	</tr>
	       	<tr>
	       		<td colspan="2"><input type="submit" name="submit" value="Send" style="width: 100%;height:  50px; border-radius: 30px;opacity: 0.8" required></td>
	       	</tr>
	       </table>
	       </form>
	       <?php
	       	       $a=mysqli_connect('localhost','root','','hd');
           if(isset($_POST['submit']))
           {
           	     $un=$_POST['un'];
           	     $id=$_POST['id'];
           	     $service1=$_POST['service1'];
           	     $item1=$_POST['item1'];
           	     $service2=$_POST['service2'];
           	     $item2=$_POST['item2'];
           	     $service3=$_POST['service3'];
           	     $item3=$_POST['item3'];
           	     $sug=$_POST['sug'];
           	    // $q1="select * from ss where ";
           	    // $run=mysqli_query($a,$q1);
           	    // $row=mysqli_fetch_array($run);
           	    //  $u=$row['un'];
           	    //  $p=$row['ps'];
           	     
        		if(mysqli_query($a,"insert into foof(un, id, service1, item1,service2, item2,service3, item3, sug) value('$un','$id','$service1','$item1', '$service2','$item2', '$service3','$item3','$sug')"))
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

<!-- </body> -->

		</div>
	</div>
	</div>
	</div>
  </div>
</body>

</html>