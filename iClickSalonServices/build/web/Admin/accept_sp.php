<?php   
include("database/db_conection.php"); 
	
	 if ( isset($_GET['accept_sp']) ) {
    $id = intval($_GET['accept_sp']);
    $result = mysqli_query($dbcon,"SELECT * FROM request_sp WHERE serv_id=$id");

    mysqli_autocommit($dbcon, false);
    mysqli_query($dbcon,"insert into service_providers select * from request_sp where serv_id = $id");
    mysqli_query($dbcon,"delete from request_sp where serv_id = $id");
    mysqli_commit($dbcon); 
	//javascript function to open in the same window   
		echo "<script>window.open('index.php','_self')</script>";  
}
?>  