<?php require('connection.php'); ?>

<?php

	$id=$_GET['del'];
	
	$conn=connect();
	
	$sql = "DELETE FROM product WHERE product_id = '$id' ";

	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/seller/products.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>