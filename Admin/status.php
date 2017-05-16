<?php
include("database/db_conection.php"); 
if(isset($_GET['status']))
{
$status1=$_GET['status'];
$select_status="select * from accounts where customer_id='$status1'";
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

$update="update accounts set status='$status2' where customer_id='$status1' ";
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