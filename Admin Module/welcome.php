<?php  
session_start();  
  
if(!$_SESSION['username'])  
{  
  
    header("Location: login.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?>  
  
<html>  
<head>  
  
    <title>  
        Registration  
    </title>  
</head>  
  
<body>  
<h1><center><b>Welcome</b></center></h1><br>
<?php  
echo $_SESSION['username'];  
?>  
  
  
<h1><a href="logout.php">Logout here</a> </h1>  
  
  
</body>  
  
</html> 