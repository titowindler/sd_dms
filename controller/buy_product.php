<?php require('connection.php'); ?>


<?php

	
	$conn=connect();

	$customer_id = $_GET['cus'];
	$product_id = $_GET['buy'];

	$order_date = date('Y-m-d');

	// $sqlFetch = "SELECT * FROM products WHERE product_id = '$product_id' ";
	// $resultFetch = mysqli_query($conn,$sqlFetch);

	// while($rowFetch = mysqli_fetch_assoc($resultFetch)) {
	
	// $prodID 	= 	$rowFetch['product_id'];
	// $getSellerID 	= 	$rowFetch['seller_id'];
	// $shirt_name 	= 	$rowFetch['shirt_name'];
	// $brand 	= 	$rowFetch['brand'];
	// $type 	= 	$rowFetch['type'];
	// $price  =	$rowFetch['price'];
	// $description  =	$rowFetch['description'];

	// }

	$insertOrder = "INSERT INTO orders (order_id, customer_id, product_id, order_date, order_status)
	VALUES (NULL,'$customer_id','$product_id','$order_date','0')";
	$resultOrder = mysqli_query($conn,$insertOrder);

	$sql = "UPDATE product SET `product_status` = '1' WHERE `product_id` = '$product_id' ";
	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/customer/orders.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>