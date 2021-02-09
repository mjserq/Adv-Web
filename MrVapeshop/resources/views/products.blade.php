@extends ('layouts.master')
@section ('Title','Products')
@section ('products')
<!-- Modal -->
<div class="modal fade" id="productaddModal" tabindex="-1" aria-labelledby="ExampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>

				      <form method="POST" action="/products"> 
					  @csrf
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

								  



									@foreach ($products as $prod)
								  <tbody>
								    <tr class="table-warning">
								      <td style="display: none;">{{ $prod->prod_id}}</td>
								      <td>{{ $prod->prod_name}}</td>
								      <td>{{ $prod->prod_price}}</td>
								      <td>{{ $prod->prod_quantity}}</td>
									  
								      <td>
									  
								      	<button type="button" class="btn btn-primary btnEdit">Edit</button>
										  
								      </td>

								      <td>
									  <a href="/products/{{$prod->prod_id}}" class="btn btn-danger">Delete</a>
								      </td>
								      
								    </tr>
									@endforeach
								    </tbody>
									
								    

								</table>
							</div>
		




							<!-- Delete Modal
				<div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="ExampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="deleteLabel">Delete Product</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div> 

				      <form method="POST" action="/products"> 
					  {{method_field('DELETE')}}
				      <div class="modal-body">
				      			<h4>Do you want to delete this product?</h4>
				      			<input type="hidden" name="delete_id" id="delete_id">
				      			<p>Product Name: <b id="delete_name">Product name</b></p>
				      			<p>Product Price: <b id="delete_price">Product Price</b></p>
				      			<p>Product Quantity: <b id="delete_quantity">Product Quantity</b></p>
				        		
								
				      	</div>
						  
				      		<div class="modal-footer">
				        		<button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
								
								<a href="" class="btn btn-warning">Yes</a>
				        		
   						</div>
						
					</form>
				      
				    </div>
				  </div>
				</div>-->
				 
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
								    <input type="text" id="up_price" name="up_price" placeholder="Product Price" class="form-control" required="true" >
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

					 
					  	@if(isset($msg))
						{{ $msg }}
						@endif
				    </div>
				  </div>
				</div>



					</div>
				</div>
				
			</header>
	

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
@endsection