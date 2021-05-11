<?php require('connection.php'); ?>


<?php

	
	$conn=connect();

	$customer = $_GET['cus'];
	$order_id = $_GET['cancel'];
	$prod_id = $_GET['prodID'];

	$cancelOrder = "DELETE FROM orders WHERE order_id = '$order_id' AND customer_id = '$customer' ";
	$resultOrder = mysqli_query($conn,$cancelOrder);

	$sql = "UPDATE product SET `product_status` = '0' WHERE `product_id` = '$prod_id' ";
	$result = mysqli_query($conn, $sql);


	if($result) {
		header("location:../views/customer/orders.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>