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


    <!-- Navbar -->
    
<?php include('include/header.php');?>
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include('include/sidebar.php');

    $cusID = $_SESSION['customer_id'];

    ?>

    <div id="content-wrapper">

      <div class="container-fluid">

    <div>
        <h3 style="color:black">My Orders</h3>
          <br>
    </div>

        <table class="table table-bordered" id="locationTable1" width="100%" cellspacing="0">
      <thead>
                <tr>
                     <th>Order Date</th>
                     <th>Shirt Name</th>
                     <th>Price</th>
                     <th>Order Status</th>
                     <th>Action</th>
                </tr>
      </thead>
           <?php
               $conn = connect();
               $result=mysqli_query($conn,"SELECT * FROM orders JOIN product ON product.product_id = orders.product_id WHERE product.product_status = 1");
              while ($row=mysqli_fetch_array($result)) {
                ?> 
            
                 <tr>
                  <td><?php echo $row['order_date'];?></td>
                  <td><?php echo $row['shirt_name'];?></td>
                  <td><?php echo $row['price'];?></td>
                  <td>
                    <?php if($row['order_status'] == 0) {?>
                        <p>IN CART</p>
                    <?php } else if ($row['order_status'] == 1) { ?>
                        <p>WAITING FOR APPROVAL</p>
                    <?php } else if ($row['order_status'] == 2) { ?>
                        <p>ORDER APPROVED BY SELLER</p>
                    <?php } else if ($row['order_status'] == 3) { ?>
                        <p>DELIVERED PRODUCT</p>
                    <?php } ?>
                  </td>

                  <td>
                   <?php if($row['order_status'] == 0){ ?> 
                    <a class="btn btn-primary btn-sm" href="../../controller/customer_proceed_order.php?proceed=<?php echo $row['order_id'];?>">Proceed Order</a>
                    <a class="btn btn-danger btn-sm" href="../../controller/customer_cancel_order.php?cus=<?php echo $cusID?>&prodID=<?php echo $row['product_id']?>&cancel=<?php echo $row['order_id'];?>">Cancel Order</a>
                  <?php }else if($row['order_status'] == 3){ ?>
                    <a class="btn btn-primary btn-sm" href="view_delivered_product.php?view=<?php echo $row['order_id']?>">VIEW DELIVERED PRODUCT</a>
                  <?php } ?>
                  </td>
                </tr> 
            <?php } ?> 
       </table>

    <br>
      </div>
      <!-- /.container-fluid -->

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

 <script>
    $(document).ready(function() {
        $('#locationTable').DataTable({
            "scrollY": "100%",
            "responsive": true,
            "paging": true,
            "scrollX": true,
            "searching": true,
            "info": false,
            "ordering": false
        });
    });
</script>


