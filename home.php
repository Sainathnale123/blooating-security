


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
background-image:url('https://live.staticflickr.com/748/32470635894_1f7b4130f9_b.jpg');
}
</style>
</head>

<body> 
    
    <br>
 
    <div class="container"> 
     <div class="row">
       <div class="col-md-4"></div>
        <div class="col-md-4"> 
         
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
                  <a href="registration.php">Regestration</a>
              </div>
               <div class="input-group">
                  <a href="forgot-Password.php">Forgot Password</a>
              </div>
              
        </div> 
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
   
    
</body>
</html>