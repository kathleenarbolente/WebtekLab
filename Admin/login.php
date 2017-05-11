<?php  
session_start();//session starts here  
  
?>  
  
  
  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Login</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
  
</style>  
  
<body>  
  
  
<div class="container">  
    <div class="row">  
        <div class="col-md-4 col-md-offset-4">  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Sign In</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="login.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">  
                            </div>  
  
  
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >  
  
                            <!-- Change this to a button or input when using this as a form -->  
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
                        </fieldset>  
                    </form> 
					<center><b>Not yet registered?</b> <br></b><a href="registration.php">Register here</a></center><!--for centered text-->  					
					<center><br></b><a href="admin_login.php">Log in as Admin</a></center>
				</div>  
            </div>  
        </div>  
    </div>  
</div>  
  
  
</body>  
  
</html>  
  
<?php  
  
include("database/db_conection.php");  
  
//customer login
if(isset($_POST['login']))  
{  
    $username=$_POST['username'];  
    $password=$_POST['password'];  
  
    $check_customers="select * from customers WHERE username='$username' AND password='$password'";  
  
    $run=mysqli_query($dbcon,$check_customers);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
  
        $_SESSION['username']=$username;//here session is used and value of $username store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Username or password is incorrect!')</script>";  
    }  
}

  
?>  