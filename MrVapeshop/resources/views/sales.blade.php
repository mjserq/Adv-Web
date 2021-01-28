@extends ('layouts.master')
@section ('Title','Home')
@section ('sales')
<!-- Modal -->
<div class="modal fade" id="salesaddModal" tabindex="-1" aria-labelledby="ExampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">New Sales</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>

				      <form method="POST" action="addsales.php"> 
				      <div class="modal-body">
				        
							<div class="mb-3">
								
								    <input type="hidden" name="sales_id" class="form-control" >
							</div>
								<div class="mb-3">
								    <label class="form-label">Date</label>
								    <input type="Date" name="sales_date"  placeholder="Enter Date" class="form-control" required="true">
							 	</div>
							 	<div class="mb-3">
								    <label class="form-label">Product Sold</label>
								    <input type="text" name="product_sold" placeholder="Product Sold" class="form-control" required="true">
							 	</div>
							 	<div class="mb-3">
								    <label class="form-label">Total Amount</label>
								    <input type="text" name="total_amount" placeholder="Total Amount" class="form-control" required="true">
							 	</div>		
				      	</div>
				      		<div class="modal-footer">
				        		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				        		<button type="submit" name="btnAdd" class="btn btn-warning">Submit</button>
   						</div>

				      </form>
				    </div>
				  </div>
				</div>


				
							

			
				     
				   



				<div class="container">
					<div class="jumbotron">
						<div class="card">
							<center>
								<h1>Daily Sales</h1>
							</center>
						</div>
						<div class="card-body">
							<center>
								<!-- Button trigger modal -->
						<button type="button" class="btn btn-warning btn-Add-sale"  id="add-prod">Add Sale</button>
							</center>
						</div>
							<div class="card-body">			
								
								<table class="table table-warning" id="table">
								  <thead>
								    <tr class="table-warning">
								     
								      
								      <th scope="col">Date</th>
								      <th scope="col">Sold Products</th>
								      <th scope="col">Total Amount of Sale</th>
								      <th scope="col">Edit</th>
								      <th scope="col">Delete</th>
								     
								    </tr>
								  </thead>

								  	




									
								  <tbody>
								    <tr class="table-warning">
								      <td style="display: none;"></td>
								      <td></td>
								      <td></td>
								      <td></td>
								      <td>
								      	<button type="button" class="btn btn-primary btnsalesEdit">Edit</button>
								      </td>

								      <td>
								      	<button type="button" class="btn btn-danger btnsalesDelete">Delete</button>
								      </td>
								      
								    </tr>
								    </tbody>

								</table>
							</div>





							<!-- Delete Modal -->
				<div class="modal fade" id="deletesalesmodal" tabindex="-1" aria-labelledby="ExampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="deleteLabel">Delete Daily Sales</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>

				      <form method="POST" action="deletesales.php"> 
				      <div class="modal-body">
				      			<h4>Do you want to delete this product?</h4>
				      			<input type="hidden" name="deletesales_id" id="deletesales_id">
				      			<p>Date: <b id="deletesales_date">Product name</b></p>
				      			<p>Product Sold: <b id="deleteproduct_sold">Product Price</b></p>
				      			<p>Total Amount Sales: <b id="deletesales_amount">Product Quantity</b></p>
				        		
								
				      	</div>
				      		<div class="modal-footer">
				        		<button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
				        		<button type="submit" name="btnsalesDelete" class="btn btn-warning">Yes</button>
   						</div>

				      </form>
				    </div>
				  </div>
				</div>

							<!-- Edit Modal -->
				<div class="modal fade" id="editsalesmodal" tabindex="-1" aria-labelledby="ExampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="editLabel">Edit Sales</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>

				       <form method="POST" action="updatesales.php"> 
				      <div class="modal-body">
				        
							<div class="mb-3">
								
								    <input type="hidden" name="upsales_id" id="upsales_id" class="form-control" >
							</div>
								<div class="mb-3">
								    <label class="form-label">Date</label>
								    <input type="Date" name="upsales_date" id="upsales_date"  placeholder="Enter Date" class="form-control" required="true">
							 	</div>
							 	<div class="mb-3">
								    <label class="form-label">Product Sold</label>
								    <input type="text" name="upproduct_sold" id="upproduct_sold" placeholder="Product Sold" class="form-control" required="true">
							 	</div>
							 	<div class="mb-3">
								    <label class="form-label">Total Amount</label>
								    <input type="text" name="uptotal_amount" id="uptotal_amount" placeholder="Total Amount" class="form-control" required="true">
							 	</div>		
				      	</div>
				      		<div class="modal-footer">
				        		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				        		<button type="submit" name="btnsalesUpdate" class="btn btn-warning">Edit Sales</button>
   						</div>

				      </form>
				    </div>
				  </div>
				</div>



					</div>
				</div>
				
			</header>
	

	<script>
		$(document).ready(function(){
		$('.btn-Add-sale').on('click', function(){
			$('#salesaddModal').modal('show');

		});
	});
	</script>

<script>
	
	$(document).ready(function(){
		$('.btnsalesDelete').on('click', function(){
			$('#deletesalesmodal').modal('show');

				$tr = $(this).closest('tr');

				var data = $tr.children("td").map(function(){
					return $(this).text();
				}).get();

				console.log(data);

				$('#deletesales_id').val(data[0]);
				$('#deletesales_date').html(data[1]);
				$('#deleteproduct_sold').html(data[2]);
				$('#deletesales_amount').html(data[3]);
		
		});
	});

</script>



<script>
	
	$(document).ready(function(){
		$('.btnsalesEdit').on('click', function(){
			$('#editsalesmodal').modal('show');
				$tr = $(this).closest('tr');

				var data = $tr.children("td").map(function(){
					return $(this).text();
				}).get();

				console.log(data);

				$('#upsales_id').val(data[0]);
				$('#upsales_date').val(data[1]);
				$('#upproduct_sold').val(data[2]);
				$('#uptotal_amount').val(data[3]);
				
		});
	});

</script>
@endsection