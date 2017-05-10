<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->  
    <title>View Users</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body>  
  
<div class="table-scrol">  
    <h1 align="center">All the Users</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>
            <th>Customer Id</th>  
            <th>Last Name</th>
			<th>First Name</th> 			
            <th>Address</th>  
            <th>E-mail</th>  
            <th>Contact Number</th>
			<th>Birthday</th>
			<th>Username</th>
			<th>Status</th>
			<th>Gender</th>			
        </tr>  
        </thead>  
  
        <?php  
			include("database/db_conection.php");  
			$view_users_query="select * from customers";//select query for viewing users.  
			$run=mysqli_query($dbcon,$view_salon_query);//here run the sql query.  
	  
			while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
			{  
				$cust_id=$row[0];  
				$last_name=$row[1];
				$first_name=$row[2];
				$address=$row[3];			
				$email=$row[4];  
				$contactno=$row[5];
				$birthday=$row[6]; 
				$username=$row[7]; 
				$password=$row[8]; 
				$status=$row[9]; 
				$gender=$row[10]; 
			
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $cust_id;  ?></td>  
            <td><?php echo $last_name;  ?></td>  
            <td><?php echo $first_name;  ?></td>  
            <td><?php echo $address;  ?></td>
			<td><?php echo $email;  ?></td> 
			<td><?php echo $contactno;  ?></td> 
			<td><?php echo $birthday;  ?></td> 
			<td><?php echo $username;  ?></td> 
			<td><?php echo $password;  ?></td> 
			<td><?php echo $status;  ?></td> 
			<td><?php echo $gender;  ?></td> 			
            <td><a href="delete.php?del=<?php echo $cust_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  
  
</body>  
  
</html>  