<?php  
session_start();  
  
if(!$_SESSION['username'])  
{  
  
    header("Location: login.php");
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