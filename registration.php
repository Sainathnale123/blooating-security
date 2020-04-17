<?php 
$con=mysqli_connect("localhost", "root", "", "earn");
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($con,"select * from login where Email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;


//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);
$user=($u);
$name=($n);
$login=0;
$query="insert into login(Password,Email,MobileNo,Gender,DOB,UserName,FullName,LoginStatus) values('$pass','$e','$mob','$gen','$dob','$user','$name','$login')";
mysqli_query($con,$query);

//upload image

//mkdir("images/$e");
//move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'>Registration successfull !!</font>";

}
}




?>


<html>
<head>
	   <style>
	   .button{
	   	
	   	background-color: #1ce335;
	   }
	   .center{
	  height: auto;border-style: solid;border-width: 4;	margin: auto;width:60% ;border:3px #1a0000; padding:70px;line-height: :1.5;
	   }
body
{
background-image:url('https://previews.123rf.com/images/sashkin7/sashkin71711/sashkin7171100023/90712520-block-chain-concept-digital-code-chain-3d-rendering.jpg');
}
</style>

<div class="center" >

 <h2>Registration Form</h2>
		<form method="post" enctype="multipart/form-data">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				 <div class="col-sm-4" >
				<tr>
					<td><b>Enter Your name</b></td>
					<Td><input  type="text"  class="form-control" name="n" required/></td>
				</tr>
				<tr>
              
					<td><b>Enter Your email </b></td>
					<Td><input type="email"  class="form-control" name="e" required/></td>
				</tr>
				
				<tr>
					<td><b>Enter Your Password</b> </td>
					<Td><input type="password"  class="form-control" name="p" required/></td>
				</tr>
				<tr>
					<td><b>Enter Your UserName </b> </td>
					<Td><input type="username"  class="form-control" name="u" required/></td>
				</tr>
				
				<tr>
					<td><b>Enter Your Mobile </b></td>
					<Td><input  class="form-control" type="number" name="mob" required/></td>
				</tr>
				
				<tr>
					<td><b>Select Your Gender</b></td>
					<Td>
				Male<input type="radio" name="gen" value="m" required/>
				Female<input type="radio" name="gen" value="f"/>	
					</td>
				</tr>
				
			
				
				
				
				
				<tr>
					<td><b>Enter Your DOB</b></td>
					<Td>
					<select name="yy" required>
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select name="mm" required>
					<option value="">Month</option>
                    
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select name="dd" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Save" name="save" />
<input type="reset" class="btn btn-success" value="Reset"/>
				</div>
					</td>
				</tr>
			</table>
		</form>
	</body>
    </div>
</html>