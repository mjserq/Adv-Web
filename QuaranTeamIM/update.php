
<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "mrvapeshop";

	$connect = mysqli_connect($servername,$username,$password,$databasename);

	if (isset($_POST['btnUpdate'])) {

		$prodId = $_POST['update_id'];

		$prodName = $_POST['up_name'];
		$prodPrice = $_POST['up_price'];
		$prodQuantity = $_POST['up_quantity'];

		$update = "UPDATE product_tbl SET prod_name = '$prodName', prod_price = '$prodPrice', prod_quantity = '$prodQuantity' WHERE prod_id = '$prodId' ";
		$query = mysqli_query($connect,$update);


		if ($query == TRUE) {
			echo '<script> alert ("Product Updated"); </script>';
			header('Location:product.php');
			exit();
		}
		else{
			echo '<script> alert ("Product not Updated"); </script>';
			exit();
		}
							       
	} 
   	 ?>