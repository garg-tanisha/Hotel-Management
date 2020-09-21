<div id="banner"><br><br><br><br><br><br><br><br><br><br><br>
			<center><div style="background:rgba(255,255,255,.5); width: 80%;">
	       <form action="" method="post">
	       <table>
	       	<tr>
	       		<td width="50%" height="50px">Username</td>
	       		<td width="50%" height="50px"><input type="text" name="un" placeholder="Enter Username" title="Enter Username"></td>
	       	</tr>
	       	<tr>
	       		<td width="50%" height="50px">ID Number</td>
	       		<td width="50%" height="50px"><input type="text" name="idno" placeholder="Enter ID number" title="Enter ID number"></td>
	       	</tr>
	       	<tr>
					<td>Room-Service required</td>
					<td><select name="service">
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
	       		<td colspan="2"><input type="submit" name="submit" value="Send" style="width: 150px;height:  50px; border-radius: 30px;opacity: 0.8"></td>
	       	</tr>
	       </table>
	       </form>
	       <?php
           if(isset($_POST['submit']))
           {
           	     $un=$_POST['un'];
           	     $idno=$_POST['idno'];
           	     $service=$_POST['service'];
           	     $sug=$_POST['sug'];
           	    // $q1="select * from ss where ";
           	    // $run=mysqli_query($a,$q1);
           	    // $row=mysqli_fetch_array($run);
           	    //  $u=$row['un'];
           	    //  $p=$row['ps'];
           	     
        		if(mysqli_query($a,"insert into rs(un, idno, service, sug) value('$un','$idno','$service','$sug')"))
        		{
        			
        			header("Success");// mysqli_query($a,"update room set status='Book' where rno=$rno");
        			header("Location:ii.php");

        		}
           	     // if($un==$u&& $ps==$p)
           	     // {
           	     // 	header("Location:ii.php");
           	     // }
           	     else
           	     {
           	     	header("Some error came...");
           	     }

           }
           
	       ?>	
	</div></center>
		</div>