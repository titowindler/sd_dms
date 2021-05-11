<?php require('connection.php'); ?>


<?php

	
	$conn=connect();

	$order_id = $_GET['proceed'];

	$sql = "UPDATE orders SET `order_status` = '1' WHERE `order_id` = '$order_id' ";
	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/customer/orders.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>