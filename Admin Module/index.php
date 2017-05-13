<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Feel Good,Look Good - Search </title>
<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<!-- Custom Fonts -->
<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
<!-- Plugin CSS -->
<link rel="stylesheet" href="css/animate.min.css" type="text/css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
</head>
<body id="page-top">
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand page-scroll" href="#page-top"><img src="" alt=""></a>
	</div>
    
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li>
			<a class="page-scroll" href="#dashboard">Dashboard</a>
			</li>
			<li>
			<a class="page-scroll" href="#request">Request</a>
			</li>
			<li>
			<a class="page-scroll" href="#client">Client</a>
			</li>
            <li>
			<a class="page-scroll" href="#service">Service Provider</a>
			</li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
<!-- Section Services
================================================== -->
<section id="dashboard">
<div class="container">
<div class="row">
	<div class="col-lg-12 text-center">
		<h2 class="section-heading">WELCOME ADMIN!</h2>
		<hr class="primary">
	</div>
</div>
</div>
    
<!-- /.carousel -->

<!-- Section About
================================================== -->
<section id="request">
<div class="container">
	<div class="row">
		<div class="col-lg-10 col-lg-offset-1 text-center">
			<h2 class="section-heading">WHAT WE STAND FOR<br/>& OUR <b>PRINCIPLES</b></h2>
			<hr>
            <ul>
			<p>
				Our mission is to provide quality beauty products, services and goods. 
To make deliveries arrive as soon as possible for our beloved customers.
Our customers should enjoy our products for them to look good, feel good, and stay pretty! 
We want them to enjoy these products as much as we cherish ours. 
Our professional customer service shall cater to the needs of any individual. 
We are only one click away and will be there to provide affordable products by your doorstep in an instant. 
With quality providers, our products will help you save money. We are your online shopping website for your beauty management needs.
			</p>
                
                <p>
                We envision a high quality business that caters to the needs of people all around, and we aim to become the
forefront of future quality customer service through online capabilities, 
with its aim to execute tasks in a timely manner.
We also aspire to achieve, though ratings and forums, improved customer service, by which if standards are not met, should set improvements.

                </p>
                
	</div>
</div>
</div>
    </section>
<div class="clearfix">
</div>
    

<!-- Section Timeline
================================================== -->
<section id="client">
<div class="container">
<div class="row">
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
    <br>
	
<!-- Section Social
================================================== -->
<section id="service">
<div class="container">
<div class="row">
		<div class="table-scrol">  
		<h1 align="center">All the Users</h1>  
	  
		<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
	  
	  
		<table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
				<thead>  
		  
				<tr>
					<th>S.P Id</th>  
					<th>Last Name</th>
					<th>First Name</th> 			
					<th>Username</th>  
					<th>Password</th>
					<th>Gender</th>
					<th>Phone Number</th>
					<th>Action</th>
				</tr>  
				</thead>  
		  
				<?php  
					include("database/db_conection.php");  
					$view_salon_query="select * from service_providers";//select query for viewing users.  
					$run=mysqli_query($dbcon,$view_salon_query);//here run the sql query.  
			  
					while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
					{  
						$serv_id=$row[0];  
						$last_name=$row[1];
						$first_name=$row[2];
						$username=$row[3];			 
						$password=$row[4]; 
						$gender=$row[5];
						$phonenumber=$row[6];
				?>  
		  
				<tr>  
		<!--here showing results in the table -->  
					<td><?php echo $serv_id;  ?></td>  
					<td><?php echo $last_name;  ?></td>  
					<td><?php echo $first_name;  ?></td>  
					<td><?php echo $username;  ?></td>
					<td><?php echo $password;  ?></td> 
					<td><?php echo $gender;  ?></td>  
					<td><?php echo $phonenumber;  ?></td> 
					<td><a href="delete_sp.php?del=<?php echo $serv_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
				</tr>  
		  
				<?php } ?>  
		  
			</table>  
        </div>  
	</div> 
    </div>
    <br>

<!-- Section Footer
================================================== -->
<section class="bg-dark">
<div class="container">
<div class="row">
	<div class="col-md-12 text-center">
		<h1 class="bottombrand wow flipInX">iClickServices</h1>
		<p>
			&copy; Webtek 2017 
		</p>
	</div>
</div>
</div>
</section>

<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.js"></script>
<script src="js/contact.js"></script>
<script src="js/countto.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/common.js"></script>
    
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