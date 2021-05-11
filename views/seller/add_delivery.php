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
     $order_id = $_GET['delivery'];

     $sqlFetch = "SELECT * FROM orders 
     JOIN customer ON orders.customer_id = customer.customer_id 
     JOIN product ON orders.product_id = product.product_id
     WHERE order_id = '$order_id' ";
     $resultFetch = mysqli_query($conn,$sqlFetch);

     while($rowFetch = mysqli_fetch_assoc($resultFetch)) {
        $c_fullname = $rowFetch['first_name'].' '.$rowFetch['last_name'];
        $shirt_name = $rowFetch['shirt_name'];
        $brand = $rowFetch['brand'];
        $type = $rowFetch['type'];
        $price = $rowFetch['price'];
        $description = $rowFetch['description'];
     }

     ?>

    <div id="content-wrapper">

      <div class="container-fluid">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header" style="color:black;border-bottom: white"><h3><center>Deliver To Customer</center></h3>
      <div class="card-body">
        <form class="form-horizontal" action="../../controller/add_delivery.php"  method="post">

        
         <div class="form-group">
            <div class="form-label-group">
              <input type="hidden" name="orderID" value="<?php echo $order_id?>">
            </div>
          </div>



           <div class="form-group">
            <div class="form-label-group">
              <input type="date" name="shirt_name" min="<?php echo date('Y-m-d')?>" class="form-control"  required="required" >
              <label>Date Delivered</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" value="<?php echo $c_fullname?>" disabled>
              <label>Deliver To:</label>
            </div>
          </div>


          <div class="form-group">
              <input type="text" class="form-control" value="Order Products" disabled>
           </div>

        <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" value="<?php echo $shirt_name?>" disabled>
              <label>Shirt Name</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" value="<?php echo $price?>" disabled>
              <label>Price</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" value="<?php echo $brand?>" disabled>
              <label>Brand</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" value="<?php echo $type?>" disabled>
              <label>Type</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" class="form-control" value="<?php echo $description?>" disabled>
              <label>Description</label>
            </div>
          </div>

        
          <button type="submit" class="btn btn-success">Submit</button>
          <a class="btn btn-danger" href="orders.php">Cancel</a>
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
