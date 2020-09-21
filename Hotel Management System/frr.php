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
					<td>Reception-Service Required</td>
					<td><select name="rservice">
						<option>--select--</option>
						<option>Tea and coffee facilities in all rooms</option>
						<option>Wake-up call</option>
						<option>Hairdryer</option>
						<option>Car hire</option>
						<option>Bicycle hire</option>
						<option>Laundry and dry cleaning</option>
						<option>Option to borrow a fridge for the room</option>
						<option>Own parking space</option>
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
           	     $rservice=$_POST['rservice'];
           	     $sug=$_POST['sug'];
           	    // $q1="select * from ss where ";
           	    // $run=mysqli_query($a,$q1);
           	    // $row=mysqli_fetch_array($run);
           	    //  $u=$row['un'];
           	    //  $p=$row['ps'];
           	     
        		if(mysqli_query($a,"insert into rs(un, idno, rservice, sug) value('$un','$idno','$rservice','$sug')"))
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