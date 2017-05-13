<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <title>Registration</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
  
</style>  
<body>  
  
<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
    <div class="row"><!-- row class is used for grid system in Bootstrap-->  
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Service Provider Registration</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="registration_sp.php">  
                        <fieldset>  
							<div class="form-group">  
                                <input class="form-control" placeholder="Last Name" name="last_name" type="text" autofocus>  
                            </div>
							
							<div class="form-group">  
                                <input class="form-control" placeholder="First Name" name="first_name" type="text" autofocus>  
                            </div>	
							
							<div class="form-group">  
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>  
                            </div>		
  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="password" type="password" autofocus>  
                            </div>
							
							<div class="form-group">  
                                <input class="form-control" placeholder="Confirm Password" name="password2" type="password" autofocus>  
                            </div>
								
							
							<div class="form-group"> 
							  <input class="form-control" placeholder="Gender" list="gender" name="gender" autofocus>
							  <datalist id="gender">
								<option value="M">
								<option value="F">
							  </datalist>
							</div>
							
							<div class="form-group">  
                                <input class="form-control" placeholder="Contact Number" name="phonenumber" type="text" autofocus>  
                            </div>
							
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="registration_sp" ></input>  
  
                        </fieldset>  
                    </form>  
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->  
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
  
</html>  
  
<?php  
  
include("database/db_conection.php");//make connection here  
if(isset($_POST['registration_sp']))  
{  
	
    $last_name=$_POST['last_name'];//here getting result from the post array after submitting the form.
	$first_name=$_POST['first_name'];
	$username=trim($_POST['username']);
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	$phonenumber=trim($_POST['phonenumber']);

	
	if ($password!=$password2)
     {
         echo"<script>alert('Password did not match')</script>";
     }
 
	$gender=$_POST['gender'];	
  
    if($last_name=='' || $first_name=='' || $username=='' || $password=='' || $password2=='' || $gender=='' || $phonenumber=='')  
    {  
        //javascript use for input checking
		echo"<script>alert('Make sure to fill all input')</script>";		 
    }
	
   
	//here query check weather if user already registered so can't register again.  
    $check_username_query="select * from service_providers WHERE username='$username'";  
    $run_query=mysqli_query($dbcon,$check_username_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
	echo "<script>alert('Username $username is already exist in the database,Please try another one!')</script>";  
	exit();  
    }
	
	//insert the user into the database.  
    $sql="insert into service_providers (last_name,first_name,username,password,gender,phonenumber) VALUE ('$last_name','$first_name','$username','$password','$gender','$phonenumber')";  
    
        	//check if records added in table
	if(mysqli_query($dbcon, $sql)){
    echo"<script>alert('Registration Successful')</script>";
	} else{
		echo ("ERROR: Could not able to execute" . mysqli_error($dbcon));
	}
      
   
}  
  
?>  