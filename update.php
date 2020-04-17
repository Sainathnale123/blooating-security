<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<h1>Welcome 
 <?php 
session_start();

$login_session=$_SESSION['login_user'];
echo $login_session;?></h1>
<a href="logout.php"> Logout </a>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<h1>Welcome 
 </h1>
 <form name="" method="post">
<input type="submit" name="submit" value="logout">
</form>
</body>
</html>


<?php 
if (isset($_POST['submit']))
	{	  
$hostname='localhost';
$user = 'root';
$password = '';
$mysql_database = 'earn';
$db = mysqli_connect($hostname,$user,$password,$mysql_database);


$login_session=$_SESSION['UserName'];



$query = mysqli_query($db,"SELECT * FROM login WHERE UserName='$login_session'");
 
 $rows = mysqli_num_rows($query);
 if ( $rows==1)
{ 	
$query="update login set LoginStatus=0 where UserName='$login_session'";
if(mysqli_query($db,$query))
{
	
 header("location:index.php");	
  } 
  else
  {
  	echo $login_session;
  	echo"wrong";
  }
}
}	
?>