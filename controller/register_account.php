<?php require('connection.php'); ?>

<?php

	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$address = $_POST['address'];
	$contact = $_POST['contact_no'];
	$gender = $_POST['gender'];
	$uname = $_POST['username'];
	$pass = $_POST['password'];

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
	
	$sql = "INSERT INTO customer (customer_id,username,password,first_name,last_name,gender,contact_no,address)
	 VALUES (NULL,'$uname','$pass','$fname','$lname','$gender','$contact','$address')";

	$result = mysqli_query($conn, $sql);

	if($result){
		$success = "Congratulations on creating your new customer account.";
		header("location:../views/index.php?success=".$success);
	}else{
		echo "ERROR!". mysqli_error($conn);
	}

?>