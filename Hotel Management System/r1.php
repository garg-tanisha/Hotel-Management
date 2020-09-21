<?php2
include("connection.php");
$r=$_GET['room'];
$ci=$_GET['ci'];
$co=$_GET['co'];
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
				<?php
				$a=mysqli_connect('localhost','root','','hd');
				  $q1="select * from room where status='unbook'";
                        $run=mysqli_query($a,$q1);
                        $row=mysqli_fetch_array($run);
                         $rno=$row['rno'];
                        $q="select * from room where status='unbook'";
                        $run=mysqli_query($a,$q);
                        $num=mysqli_num_rows($run);
                        // echo $num;
                        global $r, $ci, $co;
                        if($r<=$num)
                        {
                        	?>
                        	<tr>
					<td>Status</td>
					<td><input type="text" name="Status" value="Available" disabled="disabled" title="Status" required></td>
				</tr>
				<tr>
					<td>Name</td>
					<td><input type="text" name="name" placeholder="Enter Name" title="Name" required></td>
					<td>ID no.</td>
					<td><input type="text" name="idno" placeholder="Enter ID" title="ID" required></td>
				</tr>
				
				<tr>
					<td>City</td>
					<td><input type="text" name="city" placeholder="Enter City" title="city" required></td>
		</tr>
				<tr>
					<td>District</td>
					<td><input type="text" name="dis" placeholder="Enter District" title="district" ></td>
					<!-- <td><select name="dis">
						<option>--select--</option>
						<option>Mumbai</option>
						<option>Delhi</option>
						<option>Bengrulu</option>
					</select></td> -->
				</tr>
				<tr>
					<td>State</td>
					<td><input type="text" name="state" placeholder="Enter State" title="state" required></td>
					<!-- <td><select name="state">
						<option>--select--</option>
						<option>Maharashtra</option>
						<option>Delhi</option>
						<option>A.P</option>
					</select></td> -->
				</tr>
				<tr>
					<td>Enter E-mail</td>
					<td><input type="text" name="email" placeholder="Enter E-mail" title="E-mail" required></td>
				</tr>
				<tr>
					<td>Checkin date</td>
					<td><input type="date" name="coin" placeholder="Enter checkin date" title="Check in" required></td>
					<td>Check out</td>
					<td><input type="date" name="coout" placeholder="Enter checkout date"title="Check out" required></td>
				</tr>
				<tr>
					<td>Enter Members</td>
					<td><input type="text" name="members" placeholder="Enter Members" title="Members" required></td>
				</tr>
				<td>
					<td><input style="width: 120px; height: 30px; border-radius: 20px; opacity: 0.7" type="submit" name="submit" value="SUBMIT"></td>
				</td>

                    <?php    }
                    else
                    {
                    	?>
                           <tr>
					<td>Status</td>
					<td><input type="text" name="Status" value="Not- Available" disabled="disabled" title="Status" required></td>
				</tr>          
                    	<?php
                    }
				
				?>
				
				
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