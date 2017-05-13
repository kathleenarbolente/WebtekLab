<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admininstrator Panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />

</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="logout.php" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    
                    <li>
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard </a>
                    </li>
                   

                    <li>
                        <a href="request.php"><i class="fa fa-table "></i>Request</a>
                    </li>
                    
                    <li>
                        <a href="admin.php" ><i class="fa fa-desktop "></i>Admin</a>
                    </li>
                    
                    <li class="active-link">
                        <a href="client.php" ><i class="fa fa-desktop "></i>Client</a>
                    </li>
                    
                    <li>
                        <a href="service.php" ><i class="fa fa-desktop "></i>Service Provider</a>
                    </li>

                </ul>
           </div>

        </nav><br>
        <!-- /. NAV SIDE  -->
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
					<th>Password</th>
					<th>Gender</th>
					<th>Action</th>
				</tr>  
				</thead>  
		  
				<?php  
					include("database/db_conection.php");  
					$view_salon_query="select * from customers";//select query for viewing users.  
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
						$gender=$row[9];
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
					<td><?php echo $gender;  ?></td> 
					<td><a href="delete_client.php?del=<?php echo $cust_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
				</tr>  
		  
				<?php } ?>  
		  
			</table>  
        </div>  
	</div>  
	</div>
	
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
