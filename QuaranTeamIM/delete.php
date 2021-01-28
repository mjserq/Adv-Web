
<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "mrvapeshop";

	$connect = mysqli_connect($servername,$username,$password,$databasename);

	if (isset($_POST['btnDelete'])) {

		$prodId = $_POST['delete_id'];

		$delete = "DELETE FROM product_tbl WHERE prod_id = '$prodId' ";
		$query = mysqli_query($connect,$delete);


		if ($query == TRUE) {
			echo '<script> alert ("Product Deleted"); </script>';
			header('Location:product.php');
		
		}
		else{
			echo '<script> alert ("Product not Deleted"); </script>';
		
		}
							       
	} 
   	 ?>