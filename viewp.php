<?php 

include 'config.php';

$admin = new Admin();
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PRETTY PETS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid border-bottom d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Our Office</h6>
                        <span>Kadamaje Farmhouse,Uppinangdy,Dhakshina kannada</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center border-start border-end py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>dkadammje@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center py-2">
                <div class="d-inline-flex align-items-center">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>9483286010</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php include 'header.php' ?>
    <!-- Navbar End -->

 <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-uppercase text-dark mb-lg-4">Pets List</h1>
                    <h1 class="text-uppercase text-white mb-lg-4">We Care For Pets Like a Family</h1>
                    <!-- <p class="fs-4 text-white mb-lg-4">Buy Pets along with their products</p> -->
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products Start -->
     <!-- Products Start -->
     <div class="container-fluid py-5">
        <div class="container">
    <?php if(isset($_SESSION['cust_id'])) {?>
            <p style="text-align:right" class=""><a href="viewpsale.php" class="btn btn" style="background-color:#7ab730;color:white">View Pets for sale</a></p>
<?php } ?>
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <!-- <h6 class="text-primary text-uppercase">Pets</h6> -->
                <h1 class="display-5 text-uppercase mb-0">DOG</h1>
            </div>


            

            
          
            <div class="owl-carousel product-carousel">
                 <?php 
                                                    $stmt=$admin->ret("SELECT * FROM (( `pet_table` INNER JOIN `pet_category` on pet_category.category_id=pet_table.pc_id)INNER JOIN `pet_breed` on pet_breed.breed_id=pet_table.pb_id) where pet_table.pc_id = '1' group by pet_table.pb_id");

                                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center"><a href="btn btn" style="text-align: right;background-color: white;width:40px;margin-left: 0px;padding: 4px"></a>
                        <img class="" width="250px" height="250px" src="admin/controller/<?= $row['pet_image'] ?>" alt="">
                        <h4 class="text-uppercase"><a href=""><?= $row['breed_name'] ?><p></p></a></h4></h6>
                        <u>  <a href="singlepet3.php?p_id=<?php echo $row['pet_id']?>&pb_id=<?php echo $row['pb_id']?>" style="color:green; margin-left:100px; ">more</a></u>
                        <div class="btn-action d-flex justify-content-center">

                        
                            
                            
                        </div>
                    </div>
                </div><?php  }?>
               

               

            </div>

            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <!-- <h6 class="text-primary text-uppercase">Pets</h6> -->
                <h1 class="display-5 text-uppercase mb-0">CAT</h1>
            </div>

            <div class="owl-carousel product-carousel">
                 <?php 
                                                    $stmt=$admin->ret("SELECT * FROM (( `pet_table` INNER JOIN `pet_category` on pet_category.category_id=pet_table.pc_id)INNER JOIN `pet_breed` on pet_breed.breed_id=pet_table.pb_id) where pet_table.pc_id = '2' group by pet_table.pb_id");

                                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>
               <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center"><a href="btn btn" style="text-align: right;background-color: white;width:40px;margin-left: 0px;padding: 4px"></a>
                        <img class="" width="250px" height="250px" src="admin/controller/<?= $row['pet_image'] ?>" alt="">
                        <h4 class="text-uppercase"><a href=""><?= $row['breed_name'] ?><p></p></a></h4></h6>
                        <u>  <a href="singlepet3.php?p_id=<?php echo $row['pet_id']?>&pb_id=<?php echo $row['pb_id']?>" style="color:green; margin-left:100px; ">more</a></u>
                        <div class="btn-action d-flex justify-content-center">

                        
                            
                            
                        </div>
                    </div>
                </div><?php  }?>
               

               

            </div>

            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <!-- <h6 class="text-primary text-uppercase">Pets</h6> -->
                <h1 class="display-5 text-uppercase mb-0">BIRDS</h1>
            </div>

            <div class="owl-carousel product-carousel">
                 <?php 
                                                $stmt=$admin->ret("SELECT * FROM (( `pet_table` INNER JOIN `pet_category` on pet_category.category_id=pet_table.pc_id)INNER JOIN `pet_breed` on pet_breed.breed_id=pet_table.pb_id) where pet_table.pc_id = '3' group by pet_table.pb_id");

                                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?> <div class="pb-5">
<div class="product-item position-relative bg-light d-flex flex-column text-center"><a href="btn btn" style="text-align: right;background-color: white;width:40px;margin-left: 0px;padding: 4px"></a>
    <img class="" width="250px" height="250px" src="admin/controller/<?= $row['pet_image'] ?>" alt="">
    <h4 class="text-uppercase"><a href=""><?= $row['breed_name'] ?><p></p></a></h4></h6>
    <u>  <a href="singlepet3.php?p_id=<?php echo $row['pet_id']?>&pb_id=<?php echo $row['pb_id']?>" style="color:green; margin-left:100px; ">more</a></u>
    <div class="btn-action d-flex justify-content-center">

    
        
        
    </div>
</div>
</div><?php  }?>
               

               

            </div>
          
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <!-- <h6 class="text-primary text-uppercase">Pets</h6> -->
                <h1 class="display-5 text-uppercase mb-0">PIGS</h1>
            </div>
            <div class="owl-carousel product-carousel">
                 <?php 
                                                $stmt=$admin->ret("SELECT * FROM (( `pet_table` INNER JOIN `pet_category` on pet_category.category_id=pet_table.pc_id)INNER JOIN `pet_breed` on pet_breed.breed_id=pet_table.pb_id) where pet_table.pc_id = '4' group by pet_table.pb_id");

                                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center"><a href="btn btn" style="text-align: right;background-color: white;width:40px;margin-left: 0px;padding: 4px"></a>
                        <img class="" width="250px" height="250px" src="admin/controller/<?= $row['pet_image'] ?>" alt="">
                        <h4 class="text-uppercase"><a href=""><?= $row['breed_name'] ?><p></p></a></h4></h6>
                        <u>  <a href="singlepet3.php?p_id=<?php echo $row['pet_id']?>&pb_id=<?php echo $row['pb_id']?>" style="color:green; margin-left:100px; ">more</a></u>
                        <div class="btn-action d-flex justify-content-center">

                        
                            
                            
                        </div>
                    </div>
                </div><?php  }?>
               

               

            </div>
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <!-- <h6 class="text-primary text-uppercase">Pets</h6> -->
                <h1 class="display-5 text-uppercase mb-0">COWS</h1>
            </div>
            <div class="owl-carousel product-carousel">
                 <?php 
                                                $stmt=$admin->ret("SELECT * FROM (( `pet_table` INNER JOIN `pet_category` on pet_category.category_id=pet_table.pc_id)INNER JOIN `pet_breed` on pet_breed.breed_id=pet_table.pb_id) where pet_table.pc_id = '5' group by pet_table.pb_id");

                                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>
               <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center"><a href="btn btn" style="text-align: right;background-color: white;width:40px;margin-left: 0px;padding: 4px"></a>
                        <img class="" width="250px" height="250px" src="admin/controller/<?= $row['pet_image'] ?>" alt="">
                        <h4 class="text-uppercase"><a href=""><?= $row['breed_name'] ?><p></p></a></h4></h6>
                        <u>  <a href="singlepet3.php?p_id=<?php echo $row['pet_id']?>&pb_id=<?php echo $row['pb_id']?>" style="color:green; margin-left:100px; ">more</a></u>
                        <div class="btn-action d-flex justify-content-center">

                        
                            
                            
                        </div>
                    </div>
                </div><?php  }?>
               

               

            </div>
        </div>
    </div>
    <!-- Products End -->
    <!-- Products End -->


    <!-- Offer Start -->
  
    <!-- Offer End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5">
        <div class="container">
           
        
        </div>
    </div>
    <!-- Pricing Plan End -->
    

    <!-- Footer Start -->
    <?php include 'footer.php' ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>