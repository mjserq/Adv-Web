<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome Home</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
 
</head>
	<body>
		<header class="header">
		  		<nav class="navbar navbar-style">
		  			<div class="container">
		  				<div class="navbar-header">
		   					<img class="logo" src="img/mrvapelogo.jpg">
		   					<h1 class="user btn btn-danger">Welcome <?php echo $_SESSION['email'];?><br>
		   				</div>
		   			
		 				 <div class="navbar navbar-expand-lg ">
		    				<div class="container-fluid">
		     		 			<a class="navbar-brand btn btn-warning" id="nav-button" href="welcome.php">Home</a>
		     		 			<a class="navbar-brand btn btn-warning" id="nav-button" href="product.php">Products</a>
		     		 			<a class="navbar-brand btn btn-warning" id="nav-button" href="sales.php">Sales</a>
		     		 			<a class="navbar-brand btn btn-danger" id="nav-button" href="logout.php">Logout</a>

		    				</div>
		  				</div>
		   			</div>
				</nav>
				<div class="container">
					<div class="row">
						<div class="col-xl">
							<h1 class="welcome">Welcome to MR. Vapeshop</h1>
							
						</div>
						<div class="col-sm-6">
				
						</div>
					</div>
				</div>
			</header>
	 
	

</body>
</html>