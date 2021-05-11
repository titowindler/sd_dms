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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

  <?php
                                    if (isset($_GET['error'])){
                                        $err = $_GET['error'];   
                                        echo '<div class="alert alert-danger text-center">';
                                        echo $err;
                                        echo '</div>';
                                    }

                                    if (isset($_GET['success'])){
                                        $success = $_GET['success'];
                                        echo '<div class="alert alert-success text-center">';
                                        echo $success;
                                        echo '</div>';
                                    }
                                    if (isset($_GET['danger-msg'])){
                                        $danger = $_GET['danger-msg'];
                                        echo '<div class="alert alert-danger text-center">';
                                        echo $danger;
                                        echo '</div>';
                                    }
                                ?>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header"><center><h3>DELIVERY SYSTEM</h3></center></div>
      <div class="card-body">
        <form class="form-horizontal" action="../controller/register_account.php" method="post">

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="firstname" name="firstname" class="form-control"  required="required" >
              <label>First Name</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="lastname" name="lastname" class="form-control"  required="required" >
              <label>Last Name</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="address" name="address" class="form-control"  required="required" >
              <label>Address</label>
            </div>
          </div>

           <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="contact_no" name="contact_no" class="form-control"  required="required" >
              <label>Contact Number</label>
            </div>
          </div>

           <div class="form-group">
            <div class="form-label-group">
              <select class="form-control" name="gender">
                <option hidden selected>Select A Gender:</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
          </div>

          <br>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="username" name="username" class="form-control"  required="required" >
              <label>Username</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="password" name="password" class="form-control"  required="required">
              <label>Password</label>
            </div>
          </div>

          <button type="submit" name="register" class="btn btn-success btn-block">Submit</button>
          <a href="index.php" class="btn btn-danger btn-block">Return</a>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
