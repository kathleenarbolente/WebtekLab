<?php   
include("database/db_conection.php");  
$delete_id=$_GET['del'];  
$delete_query="delete  from request_sp WHERE serv_id='$delete_id'";//delete query  
$run=mysqli_query($dbcon,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('index.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>  