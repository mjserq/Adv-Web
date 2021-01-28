<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "mrvapeshop";

	$connect = mysqli_connect($servername,$username,$password,$databasename);

	if (isset($_POST['btnAdd'])) {
		$prodId = $_POST['prod_id'];
		$prodName = $_POST['prod_name'];
		$prodPrice = $_POST['prod_price'];
		$prodQuantity = $_POST['prod_quantity'];

		$insert = "INSERT INTO product_tbl (prod_id,prod_name,prod_price,prod_quantity)VALUES('$prodId','$prodName','$prodPrice','$prodQuantity')";
		$query = mysqli_query($connect,$insert);

		if ($query == TRUE) {
			echo '<script> alert ("Product Added"); </script>';
			header('location:product.php');
		
		}
		else{
			echo '<script> alert ("Product not Added"); </script>';
		
		}
							       
	} 
   	 ?>