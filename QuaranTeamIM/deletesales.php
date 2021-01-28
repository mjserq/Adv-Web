
<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$databasename = "mrvapeshop";

	$connect = mysqli_connect($servername,$username,$password,$databasename);

	if (isset($_POST['btnsalesDelete'])) {

		$SalesId = $_POST['deletesales_id'];

		$delete = "DELETE FROM sales_tbl WHERE sales_id = '$SalesId' ";
		$query = mysqli_query($connect,$delete);


		if ($query == TRUE) {
			echo '<script> alert ("Daily Sales Deleted"); </script>';
			header('Location:sales.php');
		
		}
		else{
			echo '<script> alert ("Sales not Deleted"); </script>';
		
		}
							       
	} 
   	 ?>