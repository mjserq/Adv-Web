<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Products</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


 
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
		     		 			<a class="navbar-brand btn btn-warning" href="welcome.php">Home</a>
		     		 			<a class="navbar-brand btn btn-warning" href="product.php">Products</a>
		     		 			<a class="navbar-brand btn btn-warning" href="sales.php">Sales</a>
		     		 			<a class="navbar-brand btn btn-danger" href="logout.php">Logout</a>

		    				</div>
		  				</div>
		   			</div>
				</nav>



				<!-- Modal -->
				<div class="modal fade" id="productaddModal" tabindex="-1" aria-labelledby="ExampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>

				      <form method="POST" action="addprod.php"> 
				      <div class="modal-body">
				        
							<div class="mb-3">
								
								    <input type="hidden" name="prod_id" class="form-control" placeholder="Product ID"  aria-describedby="emailHelp">
							</div>
								<div class="mb-3">
								    <label class="form-label">Product Name</label>
								    <input type="text" name="prod_name"  placeholder="Product Name" class="form-control" required="true">
							 	</div>
							 	<div class="mb-3">
								    <label class="form-label">Product Price</label>
								    <input type="text" name="prod_price" placeholder="Product Price" class="form-control" required="true">
							 	</div>
							 	<div class="mb-3">
								    <label class="form-label">Product Quantity</label>
								    <input type="text" name="prod_quantity" placeholder="Product Quantity" class="form-control" required="true">
							 	</div>		
				      	</div>
				      		<div class="modal-footer">
				        		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				        		<button type="submit" name="btnAdd" class="btn btn-warning">Add Product</button>
   						</div>

				      </form>
				    </div>
				  </div>
				</div>


				
							

			
				     
				   



				<div class="container">
					<div class="jumbotron">
						<div class="card">
							<center>
								<h1>Inventory</h1>
							</center>
						</div>
						<div class="card-body">
							<center>
								<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning btn-Add"  id="add-prod">Add Product</button>
							</center>
						</div>
							<div class="card-body">			
								<?php
									$servername = "localhost";
									$username = "root";
									$password = "";
									$databasename = "mrvapeshop";

									$connect = mysqli_connect($servername,$username,$password,$databasename);


									$sqlSelect = "SELECT * FROM product_tbl";
									$query = mysqli_query($connect,$sqlSelect);
									?>
								<table class="table table-warning" id="table">
								  <thead>
								    <tr class="table-warning">
								      <th scope="col" style="display: none;">Product ID</th>
								      <th scope="col">Product Name</th>
								      <th scope="col">Price</th>
								      <th scope="col">Quantity</th>
								      <th scope="col">Edit</th>
								      <th scope="col">Delete</th>
								     
								    </tr>
								  </thead>

								  	<?php
									
										if ($query) {
											foreach ($query as $row) {	
									?>




									
								  <tbody>
								    <tr class="table-warning">
								      <td style="display: none;"> <?php echo $row['prod_id']; ?> </td>
								      <td> <?php echo $row['prod_name']; ?> </td>
								      <td> <?php echo $row['prod_price']; ?> </td>
								      <td> <?php echo $row['prod_quantity']; ?> </td>
								      <td>
								      	<button type="button" class="btn btn-primary btnEdit">Edit</button>
								      </td>

								      <td>
								      	<button type="button" class="btn btn-danger btnDelete">Delete</button>
								      </td>
								      
								    </tr>
								    </tbody>

								    <?php
											}
										}else{
											echo "No Record Found";
										}
									
									
								?>

								</table>
							</div>





							<!-- Delete Modal -->
				<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="ExampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="deleteLabel">Delete Product</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>

				      <form method="POST" action="delete.php"> 
				      <div class="modal-body">
				      			<h4>Do you want to delete this product?</h4>
				      			<input type="hidden" name="delete_id" id="delete_id">
				      			<p>Product Name: <b id="delete_name">Product name</b></p>
				      			<p>Product Price: <b id="delete_price">Product Price</b></p>
				      			<p>Product Quantity: <b id="delete_quantity">Product Quantity</b></p>
				        		
								
				      	</div>
				      		<div class="modal-footer">
				        		<button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
				        		<button type="submit" name="btnDelete" class="btn btn-warning">Yes</button>
   						</div>

				      </form>
				    </div>
				  </div>
				</div>

							<!-- Edit Modal -->
				<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="ExampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="editLabel">Edit Product</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>

				      <form method="POST" action="update.php"> 
				      <div class="modal-body">



				      			<div class="mb-3">
								 
								    <input type="hidden" id="update_id" name="update_id"  placeholder="Product Id" class="form-control" >
				        
								<div class="mb-3">
								    <label class="form-label">Product Name</label>
								    <input type="text" id="up_name" name="up_name"  placeholder="Product Name" class="form-control" required="true">
							 	</div>
							 	<div class="mb-3">
								    <label class="form-label">Product Price</label>
								    <input type="text" id="up_price" name="up_price" placeholder="Product Price" class="form-control" required="true" value="₱">
							 	</div>
							 	<div class="mb-3">
								    <label class="form-label">Product Quantity</label>
								    <input type="text" id="up_quantity" name="up_quantity" placeholder="Product Quantity" class="form-control" required="true">
							 	</div>		
				      	</div>
				      		<div class="modal-footer">
				        		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				        		<button type="submit" name="btnUpdate" class="btn btn-warning">Edit Product</button>
   						</div>

				      </form>
				    </div>
				  </div>
				</div>



					</div>
				</div>
				
			</header>
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
	

<script>
	
	$(document).ready(function(){
		$('.btn-Add').on('click', function(){
			$('#productaddModal').modal('show');

		});
	});

</script>

<script>
	
	$(document).ready(function(){
		$('.btnDelete').on('click', function(){
			$('#deletemodal').modal('show');

				$tr = $(this).closest('tr');

				var data = $tr.children("td").map(function(){
					return $(this).text();
				}).get();

				console.log(data);

				$('#delete_id').val(data[0]);
				$('#delete_name').html(data[1]);
				$('#delete_price').html(data[2]);
				$('#delete_quantity').html(data[3]);
		
		});
	});

</script>



<script>
	
	$(document).ready(function(){
		$('.btnEdit').on('click', function(){
			$('#editmodal').modal('show');
				$tr = $(this).closest('tr');

				var data = $tr.children("td").map(function(){
					return $(this).text();
				}).get();

				console.log(data);

				$('#update_id').val(data[0]);
				$('#up_name').val(data[1]);
				$('#up_price').val(data[2]);
				$('#up_quantity').val(data[3]);
				
		});
	});

</script>
</body>
</html>

