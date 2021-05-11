<?php require('connection.php'); ?>


<?php

	$prodID 	= 	$_POST['prodID'];

	$getSellerID 	= 	$_POST['getSellerID'];

	$shirt_name 	= 	$_POST['shirt_name'];

	$brand 	= 	$_POST['brand'];

	$type 	= 	$_POST['type'];

	$price  =	$_POST['price'];

	$description  =	$_POST['description'];




	$conn=connect();

	$sql = "UPDATE product SET `shirt_name` = '$shirt_name', `brand` = '$brand', `type` = '$type', `price` = '$price', `description` = '$description'
		WHERE `product_id` = '$prodID' ";
	
	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/seller/products.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>