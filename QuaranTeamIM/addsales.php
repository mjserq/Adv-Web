<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "mrvapeshop";

	$connect = mysqli_connect($servername,$username,$password,$databasename);

	if (isset($_POST['btnAdd'])) {
		$sales_id = $_POST['sales_id'];
		$sales_date = $_POST['sales_date'];
		$product_sold = $_POST['product_sold'];
		$total_amount = $_POST['total_amount'];

		$insert = "INSERT INTO sales_tbl (sales_id,sales_date,product_sold,total_amount)VALUES('$sales_id','$sales_date','$product_sold','$total_amount')";
		$query = mysqli_query($connect,$insert);

		if ($query == TRUE) {
			echo '<script> alert ("New Daily Sales Added"); </script>';
			header('location:sales.php');
		
		}
		else{
			echo '<script> alert ("Sales not Added"); </script>';
		
		}
							       
	} 
   	 ?>