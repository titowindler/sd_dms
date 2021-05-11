<?php require('connection.php'); ?>


<?php

	
	$conn=connect();

	$order_id = $_GET['approved'];

	$sql = "UPDATE orders SET `order_status` = '2' WHERE `order_id` = '$order_id' ";
	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/seller/orders.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>