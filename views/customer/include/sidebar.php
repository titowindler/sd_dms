<ul class="sidebar navbar-nav">

  <?php if($_SESSION['user_type'] == 1) { ?>

      <li class="nav-item">
        <a class="nav-link" href="products.php">
          <span>Products</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="orders.php">
          <span>Orders</span>
        </a>
      </li>

   <?php } ?>
  </ul>
