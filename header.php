<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <a href="index.html" class="navbar-brand ms-lg-5">
        <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3" style="color: #7ab730 !important"></i>PRETTY PETS</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="index.php" style="color: #7ab730 !important" class="nav-item nav-link <?php if( $_SERVER['REQUEST_URI'] == '/prettypets1/index.php') {?> active <?php } ?> ">Home</a>
             <?php if(!isset($_SESSION['cust_id'])) {?>
            <a href="about.php" class="nav-item nav-link <?php if( $_SERVER['REQUEST_URI'] == '/prettypets1/about.php') {?> active <?php } ?>">About</a>
        <?php } ?>
            <a href="service.php" class="nav-item nav-link <?php if( $_SERVER['REQUEST_URI'] == '/prettypets1/service.php') {?> active <?php } ?>">Service</a>
            <a href="product.php" class="nav-item nav-link <?php if( $_SERVER['REQUEST_URI'] == '/prettypets1/product.php') {?> active <?php } ?>">Product</a>
            <a href="cart.php" class="nav-item nav-link <?php if( $_SERVER['REQUEST_URI'] == '/prettypets1/cart.php') {?> active <?php } ?>">Cart</a>
            
            <a href="viewp.php" class="nav-item nav-link <?php if( $_SERVER['REQUEST_URI'] == '/prettypets1/viewp.php') {?> active <?php } ?>">Pets</a>
          <?php if(isset($_SESSION['cust_id'])) {?>
            <a href="orders.php" class="nav-item nav-link <?php if( $_SERVER['REQUEST_URI'] == '/prettypets1/orders.php') {?> active <?php } ?>">My Orders</a>
            <a href="intrequest.php" class="nav-item nav-link <?php if( $_SERVER['REQUEST_URI'] == '/prettypets1/intrequest.php') {?> active <?php } ?>">Request</a>
            <a href="logout.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5" style="background-color:  #7ab730 !important">LOGOUT <i class="bi bi-arrow-right"></i></a>
            <?php } else { ?>

                <a href="register.php" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">LOGIN <i class="bi bi-arrow-right"></i></a>


                <?php } ?>
        </div>
    </div>
</nav>