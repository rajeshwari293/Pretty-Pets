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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<style>
    .navbar1 {
  overflow: hidden;
  background-color: #333;
  width:200px;
  margin-left:1250px;
  margin-top:40px;
}

.navbar1 a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown1 {
  float: left;
  overflow: hidden;
}

.dropdown1 .dropbtn1 {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar1 a:hover, .dropdown1:hover .dropbtn1 {
  background-color: red;
}

.dropdown-content1 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 10px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content1 a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content1 a:hover {
  background-color: #ddd;
}

.dropdown1:hover .dropdown-content1 {
  display: block;
}
</style>

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
                    <h1 class="display-1 text-uppercase text-dark mb-lg-4">Pets For Sale</h1>
                    <h1 class="text-uppercase text-white mb-lg-4">We Care For Pets Like a Family</h1>
                    <h3 style="color:black">Pet Orders Accepted Only within Dakshina Kannada</h3>
                    <!-- <p class="fs-4 text-white mb-lg-4">Buy Pets along with their products</p> -->
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        
                       
                    </div>
                </div>
            </div>
             <div class="navbar1">

  <div class="dropdown1">
    <button class="dropbtn1">Filter By Breeds 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content1">
     <?php

     $sttmmt = $admin->ret("SELECT * FROM `pet_breed` where `petcat_id`='1' order by `breed_name` asc");
     while($rows  = $sttmmt->fetch(PDO::FETCH_ASSOC)){?>
     
   
     <a href="viewsalebyfilter.php?id=<?php echo $rows['breed_id'] ?>"><?php echo $rows['breed_name'] ?></a>
     <?php } ?>
    </div>
  </div> 
</div>
        </div>
            
    </div>

    <!-- Products Start -->
     <!-- Products Start -->
     <div>


     <div class="container-fluid py-5">
        
        
        <div class="container">
        
            <!-- <p style="text-align:right" class=""><a href="viewpsale.php" class="btn btn" style="background-color:#7ab730;color:white">View Pets for sale</a></p> -->
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Pets</h6>
                <h1 class="display-5 text-uppercase mb-0">DOG</h1>
            </div>


            

            
          
            <div class="owl-carousel product-carousel">
                 <?php 
                                                    $stmt=$admin->ret("SELECT * FROM (( `pet_table` INNER JOIN `pet_category` on pet_category.category_id=pet_table.pc_id)INNER JOIN `pet_breed` on pet_breed.breed_id=pet_table.pb_id) where pet_table.status='sale' and pet_table.pc_id = '1'");

                                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>
                <div class="pb-5">
                    
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <a href="btn btn" style="text-align: right;background-color: white;width:40px;margin-left: 0px;padding: 4px"><b><?php echo $row['status'];?></b></a>
                        
                        <img class="" width="250px" height="250px" src="admin/controller/<?= $row['pet_image'] ?>" alt="">
                        <h4 class="text-uppercase"><a href=""><?= $row['breed_name'] ?><p>(<?php echo $row['pet_code']?>)</p></a></h4></h6>
                        <u>  <a href="singlepet.php?p_id=<?php echo $row['pet_id']?>" style="color:green; margin-left:100px; ">more</a></u>
                        <div class="btn-action d-flex justify-content-center">

                        
                            
                            
                        </div>
                    </div>
                </div><?php  }?>
               

               

            </div>

            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Pets</h6>
                <h1 class="display-5 text-uppercase mb-0">CAT</h1>
            </div>

            <div class="owl-carousel product-carousel">
                 <?php 
                                                    $stmt=$admin->ret("SELECT * FROM (( `pet_table` INNER JOIN `pet_category` on pet_category.category_id=pet_table.pc_id)INNER JOIN `pet_breed` on pet_breed.breed_id=pet_table.pb_id) where pet_table.status='sale' and pet_table.pc_id = '2'");

                                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>
               <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                    <a href="btn btn" style="text-align: right;background-color: white;width:40px;margin-left: 0px;padding: 4px"><b><?php echo $row['status'];?></b></a>
                        
                        <img class="" width="250px" height="250px" src="admin/controller/<?= $row['pet_image'] ?>" alt="">
                        <h4 class="text-uppercase"><a href=""><?= $row['breed_name'] ?><p>(<?php echo $row['pet_code']?>)</p></a></h4></h6>
                        <u>  <a href="singlepet.php?p_id=<?php echo $row['pet_id']?>" style="color:green; margin-left:100px; ">more</a></u>
                        <div class="btn-action d-flex justify-content-center">

                        
                            
                            
                        </div>
                    </div>
                </div><?php  }?>
               

               

            </div>

            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Pets</h6>
                <h1 class="display-5 text-uppercase mb-0">PIG</h1>
            </div>


            

            
          
            <div class="owl-carousel product-carousel">
                 <?php 
                                                    $stmt=$admin->ret("SELECT * FROM (( `pet_table` INNER JOIN `pet_category` on pet_category.category_id=pet_table.pc_id)INNER JOIN `pet_breed` on pet_breed.breed_id=pet_table.pb_id) where pet_table.status='sale' and pet_table.pc_id = '4'");

                                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>
                <div class="pb-5">
                    
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <a href="btn btn" style="text-align: right;background-color: white;width:40px;margin-left: 0px;padding: 4px"><b><?php echo $row['status'];?></b></a>
                        
                        <img class="" width="250px" height="250px" src="admin/controller/<?= $row['pet_image'] ?>" alt="">
                        <h4 class="text-uppercase"><a href=""><?= $row['breed_name'] ?><p>(<?php echo $row['pet_code']?>)</p></a></h4></h6>
                        <u>  <a href="singlepet.php?p_id=<?php echo $row['pet_id']?>" style="color:green; margin-left:100px; ">more</a></u>
                        <div class="btn-action d-flex justify-content-center">

                        
                            
                            
                        </div>
                    </div>
                </div><?php  }?>
               

               

            </div>
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Pets</h6>
                <h1 class="display-5 text-uppercase mb-0">COW</h1>
            </div>


            

            
          
            <div class="owl-carousel product-carousel">
                 <?php 
                                                    $stmt=$admin->ret("SELECT * FROM (( `pet_table` INNER JOIN `pet_category` on pet_category.category_id=pet_table.pc_id)INNER JOIN `pet_breed` on pet_breed.breed_id=pet_table.pb_id) where pet_table.status='sale' and pet_table.pc_id = '5'");

                                                    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>
                <div class="pb-5">
                    
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <a href="btn btn" style="text-align: right;background-color: white;width:40px;margin-left: 0px;padding: 4px"><b><?php echo $row['status'];?></b></a>
                        
                        <img class="" width="250px" height="250px" src="admin/controller/<?= $row['pet_image'] ?>" alt="">
                        <h4 class="text-uppercase"><a href=""><?= $row['breed_name'] ?><p>(<?php echo $row['pet_code']?>)</p></a></h4></h6>
                        <u>  <a href="singlepet.php?p_id=<?php echo $row['pet_id']?>" style="color:green; margin-left:100px; ">more</a></u>
                        <div class="btn-action d-flex justify-content-center">

                        
                            
                            
                        </div>
                    </div>
                </div><?php  }?>
               

               

            </div>
    <!-- Products End -->
    <!-- Products End -->


    <!-- Offer Start -->
    <!-- <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-start">
                <div class="col-lg-7">
                    <div class="border-start border-5 border-dark ps-5 mb-5">
                        <h6 class="text-dark text-uppercase">Special Offer</h6>
                        <h1 class="display-5 text-uppercase text-white mb-0">Save 50% on all items your first order</h1>
                    </div>
                    <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo lorem. Elitr ut dolores magna sit. Sea dolore sed et.</p>
                    <a href="" class="btn btn-light py-md-3 px-md-5 me-3">Shop Now</a>
                    <a href="" class="btn btn-outline-light py-md-3 px-md-5">Read More</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Offer End -->


    <!-- Pricing Plan Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Pricing Plan</h6>
                <h1 class="display-5 text-uppercase mb-0">Competitive Pricing For Pet Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase">Basic</h2>
                        <h6 class="text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-primary p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">₹</small>49<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>HTML5 & CSS3</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Bootstrap v5</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Responsive Layout</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Browsers Compatibility</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5">
                        <h2 class="text-uppercase">Standard</h2>
                        <h6 class="text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-dark p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">₹</small>99<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>HTML5 & CSS3</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Bootstrap v5</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Responsive Layout</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Browsers Compatibility</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase">Extended</h2>
                        <h6 class="text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-primary p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">₹</small>149<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>HTML5 & CSS3</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Bootstrap v5</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Responsive Layout</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>Browsers Compatibility</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
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