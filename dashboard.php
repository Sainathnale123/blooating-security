
<html>
<head>
<div></div>
 <center><b><h1 style="height:50px;width:300px">Welcome</h1></b></center>
		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				<center> <div class="col-sm-4" margin-left: 200px;>
		 <div>
				
				<tr>
				
					<center><td ><b>Enter Time for surfing</b></td></center>
					<Td>
					<select name="yy" required>
					<option value="">Hour</option>
					<?php 
					for($i=0;$i<=24;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select name="mm" required>
					<option value="">Min</option>
                    
					<?php 
					for($i=0;$i<=60;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select name="dd" required>
					<option value="">Sec</option>
					<?php 
					for($j=0;$j<=60;$j++)
					{
					echo "<option>".$j."</option>";
					}					
					?>
					
					</select>
					
					</td>
										

		
				</tr>
				<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Save" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/>
				
	

					</tr>
			</div>
			</center>
			</table>
		</form>
		
	</body>
    </div>
</html>

<?php

if(isset($_POST['save']))
{
$hour=$_POST['yy'];
$min=$_POST['mm'];
$sec=$_POST['dd'];
$hs=$hour*60*60;
$ms=$min*60;
$ts=$hs+$ms+$sec;
?>


<div>				</td>
					<form action="#">
 <center>   <input style="height:50px;width:300px" type="submit" value="<?php echo "You Surf For:";echo $ts; echo "Sec";?>" /> </center>
</form></div><?php
header("Refresh:$ts; url=index.php");
}




 if(!isset($_SESSION)) 
    {   
        session_start(); 
        if((time() - $_SESSION['last_login_timestamp']) > 60*2) // 900 = 15 * 60  
           {  
                header("location:logout.php");  
           } 
    }
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if (empty($_SESSION['UserName'])) {
  header('location:logout.php');
  } else{ ?>
 

<!DOCTYPE html>
<html>
<body>




<form action="demo.php">
 <center>   <input style="height:50px;width:300px" type="submit" value="Model no 1" /> </center>
</form>

<form action="refresh.php">
 <center>   <input style="height:50px;width:300px" type="submit" value="AutoRefresh Model" /> </center>
</form>
<form action="time.php">
 <center>   <input style="height:50px;width:300px" type="submit" value="Inactive Time Logout" /> </center>
</form>
<form name="" action="update.php"method="post">
 <center>   <input style="height:50px;width:300px" type="submit" value="submit" name="Logout" /> </center>
</form>



</body>
</html>



<?php } ?>
