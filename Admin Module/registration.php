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
                    <h3 class="panel-title">Registration</h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="registration.php">  
                        <fieldset>  
							<div class="form-group">  
                                <input class="form-control" placeholder="Last Name" name="last_name" type="text" autofocus>  
                            </div>
							
							<div class="form-group">  
                                <input class="form-control" placeholder="First Name" name="first_name" type="text" autofocus>  
                            </div>	
							
							<div class="form-group">  
                                <input class="form-control" placeholder="Address" name="address" type="text" autofocus>  
                            </div>	
							
							<div class="form-group">  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>
							
							<div class="form-group">  
                                <input class="form-control" placeholder="Contact Number" name="contactno" type="text" autofocus>  
                            </div>
							
							<div class="form-group">
								<input class="form-control" placeholder="Birthday" name="bday" type="date" autofocus>
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
							
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  
  
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
if(isset($_POST['register']))  
{  
	
    $last_name=$_POST['last_name'];//here getting result from the post array after submitting the form.
	$first_name=$_POST['first_name'];
	$address=$_POST['address'];  
    $email=trim($_POST['email']);
	$contactno=trim($_POST['contactno']);
	$bday=trim($_POST['bday']);
	$username=trim($_POST['username']);
	$password=$_POST['password'];
	$password2=$_POST['password2'];
	
	if ($password!=$password2)
 {
     echo("Oops! Password did not match! Try again. ");
 }
 
	$gender=$_POST['gender'];	
  
    if($last_name=='' || $first_name=='' || $address=='' || $email=='' || $contactno=='' || $bday=='' || $username==''
		|| $password=='' || $password2==''|| $gender=='')  
    {  
        //javascript use for input checking
		echo"<script>alert('Make sure to fill all input')</script>";		 
    }
	
	
	//validate phone number.only accept integer values
	if((preg_match("/[^0-9]/", $contactno)) && strlen($contactno) == 10)
	{
	echo "Invalid phone number";

	}
   
	//here query check weather if user already registered so can't register again.  
    $check_username_query="select * from customers WHERE username='$username'";  
    $run_query=mysqli_query($dbcon,$check_username_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
	echo "<script>alert('Username $username is already exist in the database,Please try another one!')</script>";  
	exit();  
    }
	
	//insert the user into the database.  
    $sql="insert into customers (last_name,first_name,address,email,contactno,bday,username,password,gender) VALUES ('$last_name','$first_name','$address','$email','$contactno','$bday','$username','$password','$gender')";  
    
	//check if records added in table
	if(mysqli_query($dbcon, $sql)){
    echo "Records added successfully.";
	} else{
		echo ("" . mysqli_error($dbcon));
	}
	
	if(mysqli_query($dbcon,$sql))  
    {  
        echo"<script>window.open('welcome.php','_self')</script>";  
    }  
   
}  
  
?>  