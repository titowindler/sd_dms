<?php require('connection.php'); ?>

<?php

	$seller_id = $_POST['getSellerID'];

	$shirt_name=$_POST['shirt_name'];
	$brand=$_POST['brand'];
	$type=$_POST['type'];
	$price=$_POST['price'];
	$description=$_POST['description'];

	// $image = '';
	// 	//check if file uploaded exists and there are no errors during upload
	// 	if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){

	// 		if($_FILES['image']['type'] == "image/png" || $_FILES['image']['type'] == "image/jpeg") {

	// 			if($_FILES['image']['type'] < 10000000){
	// 				//define the new location and name of the photo (images/1001_mypic.png)
	// 				$image = "../images/" .$student_fname."_".$_FILES['image']['name'];
	// 				//tell PHP to move the file from where and to where
	// 				move_uploaded_file($_FILES['image']['tmp_name'], $image);	
	// 			}
	// 		}
	// 	}

	$conn=connect();
	
	$sql = "INSERT INTO product (product_id,seller_id,shirt_name,brand,type,price,description,product_status)
	 VALUES (NULL,'$seller_id','$shirt_name','$brand','$type','$price','$description',0)";

	$result = mysqli_query($conn, $sql);

	

	if($result){
		header("location:../views/seller/products.php");
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>