<?php require('../../controller/connection.php');?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Delivery System</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

  <?php include('include/header.php');?>
   
  <div id="wrapper">

     <?php include('include/sidebar.php');?>

     <?php 

      $conn = connect();

     $seller_id = $_SESSION['seller_id'];

     $get_prodID = $_GET['edit'];

       $sql = "SELECT * FROM product WHERE product_id = '$get_prodID' ";
       $result = mysqli_query($conn,$sql);
       while($row = mysqli_fetch_assoc($result)) {
        $product_id = $row['product_id'];
        $get_sellerID = $row['seller_id'];
        $shirt_name = $row['shirt_name'];
        $brand = $row['brand'];
        $type = $row['type'];
        $price = $row['price'];
        $description = $row['description'];
  }


     ?>


    <div id="content-wrapper">

      <div class="container-fluid">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header" style="color:black;border-bottom: white"><h3><center>Edit Product</center></h3>
      <div class="card-body">
        <form class="form-horizontal" action="../../controller/edit_product.php"  method="post">

           <div class="form-group">
            <div class="form-label-group">
              <input type="hidden" name="prodID" value="<?php echo $product_id?>">
            </div>
          </div>

         <div class="form-group">
            <div class="form-label-group">
              <input type="hidden" name="getSellerID" value="<?php echo $get_sellerID?>">
            </div>
          </div>

           <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="shirt_name" class="form-control" value="<?php echo $shirt_name?>"  required="required" >
              <label>Shirt Name</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="brand" class="form-control" value="<?php echo $brand?>"  required="required" >
              <label>Brand</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <select class="form-control" name="type">
                <option value="<?php echo $type?>" hidden><?php echo $type?></option>
                <option value="T-Shirt">T-Shirt</option>
                <option value="Dress">Dress</option>
                <option value="Office Shirt">Office Shirt</option>
                <option value="Formal">Formal</option>
                <option value="Short Sleeve">Short Sleeve</option>
                <option value="Long Sleeve">Long Sleeve</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="number" name="price" class="form-control" value="<?php echo $price?>"  required="required" >
              <label>Price</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="description" class="form-control" value="<?php echo $description?>"  required="required" >
              <label>Description</label>
            </div>
          </div>

          <button type="submit" class="btn btn-success">Submit</button>
          <a class="btn btn-danger" href="products.php">Cancel</a>
        </form>
      </div>
    </div>
  </div>


    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>


  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../vendor/chart.js/Chart.min.js"></script>
  <script src="../vendor/datatables/jquery.dataTables.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="../js/demo/datatables-demo.js"></script>
  <script src="../js/demo/chart-area-demo.js"></script>

</body>

</html>
