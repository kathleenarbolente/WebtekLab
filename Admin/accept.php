<?php   
include("database/db_conection.php"); 
	
	 if ( isset($_GET['accept']) ) {
    $id = intval($_GET['accept']);
    $result = mysqli_query($dbcon,"SELECT * FROM request_accounts WHERE customer_id=$id");

    mysqli_autocommit($dbcon, false);
    mysqli_query($dbcon,"insert into accounts select * from request_accounts where customer_id = $id");
    mysqli_query($dbcon,"delete from request_accounts where customer_id = $id");
    mysqli_commit($dbcon); 
	//javascript function to open in the same window   
		echo "<script>window.open('index.php','_self')</script>";  
}
?>  