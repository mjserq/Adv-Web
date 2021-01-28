<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "mrvapeshop";

	$connect = mysqli_connect($servername,$username,$password,$databasename);

	if (isset($_POST['btnsalesUpdate'])) {
		$sales_id = $_POST['upsales_id'];
		$sales_date = $_POST['upsales_date'];
		$product_sold = $_POST['upproduct_sold'];
		$total_amount = $_POST['uptotal_amount'];

		$update = "UPDATE sales_tbl SET sales_date = '$sales_date', product_sold = '$product_sold', total_amount = '$total_amount' WHERE sales_id = '$sales_id' ";
		$query = mysqli_query($connect,$update);


		if ($query == TRUE) {
			echo '<script> alert ("Daily Sales was Updated"); </script>';
			header('Location:sales.php');
			exit();
		}
		else{
			echo '<script> alert ("Product not Updated"); </script>';
			exit();
		}
							       
	}  
   	 ?>