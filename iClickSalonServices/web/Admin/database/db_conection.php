<?php    
$dbcon=mysqli_connect("localhost","root","") or die ("could not connect to mysql"); 
mysqli_select_db($dbcon,"salon") or die ("no database");  
?>  