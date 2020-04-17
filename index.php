<?php 
    session_start();
    $connection=mysqli_connect("localhost","root","","earn"); 
    
    $msg="";
    if(isset($_POST['submit'])){
        $UserName=mysqli_real_escape_string($connection,strtolower($_POST['UserName']));
        
        $Password=mysqli_real_escape_string($connection,$_POST['Password']); 
        //$log=0;
        $login_query="SELECT * FROM `login` WHERE UserName='$UserName' and Password='$Password' and LoginStatus='0'";
        
        $login_res=mysqli_query($connection,$login_query);
        if(mysqli_num_rows($login_res)>0){ 
            $_SESSION['UserName']=$UserName;  
            $_SESSION['last_login_timestamp'] = time();  
$sqlm = "UPDATE login SET LoginStatus=1 WHERE UserName='$UserName' and Password='$Password'";

if ($connection->query($sqlm) === TRUE) {
    echo"";
} else {
    echo "Error updating record: " . $conn->error;
}
            header('Location:dashboard.php');
           
          
        } 
        else{
             $msg= '<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Unsuccessful!</strong> Login Unsuccessful.
                  </div>';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title> 
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
      <style>
body
{
background-image:url('https://previews.123rf.com/images/anyaberkut/anyaberkut1603/anyaberkut160300174/53072066-working-on-computer-close-up-of-hand-on-keyboard.jpg');
}
</style>
</head>

<body> 
    
    <br>
 
    <div class="container"> 
     <div class="row">
       <div class="col-md-4"></div>
        <div class="col-md-4"> 
          <?php echo $msg; ?>
            <div class="page-header">
                <h1 style="text-align: center;"><b>Login</b></h1>      
          </div> 
            <form class="form-horizontal animated bounce" action="" method="post"> 
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="UserName" type="text" class="form-control" name="UserName" placeholder="UserName">
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="Password" type="Password" class="form-control" name="Password" placeholder="Password">
                </div>
                <br> 
                
                <div class="input-group">
                  <button type="submit" name="submit" class="btn btn-success">Log in</button>
                  
                </div>

              </form>  
              <br> 
              <div class="input-group">
                <b>  <a href="registration.php">Regestration</a></b>
              </div>
               <div class="input-group" >
               <b>  <a href="forgot-Password.php">Forgot Password</a></b>
              </div>
              
        </div> 
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
   
    
</body>
</html>