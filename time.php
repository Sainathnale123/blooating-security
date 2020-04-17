
<html>
<head>
	



 
		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				 <div class="col-sm-4">
		 <div >
				
				<tr>
				
					<td><b>Enter Time for surfing</b></td>
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
				
					</td>
					</tr>
			</div>
			</table>
		</form>
	</body>
    </div>
</html>

<?php
if(isset($_POST['save']))
{
$hour=$_POST['yy'];
echo $hour;
echo ":";
$min=$_POST['mm'];
echo $min;
echo ":";
$sec=$_POST['dd'];
echo $sec;
$hs=$hour*60*60;
$ms=$min*60;
$ts=$hs+$ms+$sec;
echo "=";
echo $ts;
header("Refresh:0; url=dashboard.php");
}
?>