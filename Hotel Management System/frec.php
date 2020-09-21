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
					<td width="50%" height="50px">Item 1</td>
					<td width="50%" height="50px"><select name="service1">
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
					<td width="50%" height="50px" style="padding: 5px;">Quantity of Item 1</td>
					<td width="50%" height="50px"><select name="service3">
						<option>--select--</option>
						<option>0</option>
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
					<td width="50%" height="50px"><select name="service2">
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
					<td width="50%" height="50px"><select name="service3">
						<option>--select--</option>
						<option>0</option>
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
					<td width="50%" height="50px"><select name="service3">
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
					<td width="50%" height="50px"><select name="service3">
						<option>--select--</option>
						<option>0</option>
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
	       		<td width="50%" height="50px"><input type="text" name="sug" placeholder="Enter Suggestions if any" title="Enter  Suggestions if any"></td>
	       	</tr>
	       	<tr>
	       		<td colspan="2"><input type="submit" name="submit" value="Send" style="width: 100%;height:  50px; border-radius: 30px;opacity: 0.8"></td>
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