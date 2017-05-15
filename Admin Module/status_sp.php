<?php
include("database/db_conection.php"); 
if(isset($_GET['status']))
{
$status1=$_GET['status'];
$select_status="select * from service_providers where serv_id='$status1'";
$run=mysqli_query($dbcon,$select_status);
while($row=mysqli_fetch_object($run))
{
$st=$row->status;
if($st=='0')
{
$status2=1;
}
else
{
$status2=0;
}

$update="update service_providers set status='$status2' where serv_id='$status1' ";
$run=mysqli_query($dbcon,$update); 
if($run)
{
header("Location:index.php");
}
else
{
echo mysqli_error($dbcon);
}
}
}
?>