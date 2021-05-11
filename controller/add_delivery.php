<?php require('connection.php'); ?>


<?php

	
	$conn=connect();

	$order_id = $_POST['orderID'];

	$order_date = date('Y-m-d');

	$insertDelivery = "INSERT INTO delivery (delivery_id,order_id,date_delivered)
	VALUES (NULL,'$order_id','$order_date')";
	$resultDelivery = mysqli_query($conn,$insertDelivery);

	$sql = "UPDATE orders SET `order_status` = '3' WHERE `order_id` = '$order_id' ";
	$result = mysqli_query($conn, $sql);

	if($result){
		header("location:../views/seller/orders.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>