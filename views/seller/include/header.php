  <?php
          session_start();
  ?>

 <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
 <?php if($_SESSION['user_type'] == 2) { ?>
   <a class='navbar-brand mr-1' href='#index.php' style='color:white'>Delivery System</a>
   <?php } ?>  

    <div class="d-none d-md-inline-block ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <!-- Navbar -->
     <ul class="navbar-nav ml-auto ml-md-0">

      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;margin-right:-15px;font-size:15px">
            <!-- <i class="fa fa-user-circle fa-fw" style="font-size:20px;margin-right:10px"></i> -->
            <?php echo $_SESSION['uName']; ?>
        </a>
      </li>

       <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">
            <i class="fa fa-caret-down" style="font-size:20px;margin-left:10px"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
   </div>
  </nav>