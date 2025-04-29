<?php 

include 'config.php';
$admin = new Admin();
?>

<!DOCTYPE html>
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
                        <span>dkadammaje@gmail.com</span>
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
    

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Services</h6>
                <h1 class="display-5 text-uppercase mb-0">Our Excellent Pet Care Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-house display-1 text-primary me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Boarding</h5>
                            <p> our famhouse is built on outskirts and further away from the city so that they can get fresh air and they can naturally adjusted to the weather. we have provided spacious places for all the pets.along with this every pet has seperate shelter facility  </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-food display-1 text-primary me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Feeding</h5>
                            <p>we feed food for every pets on time with correct quantity.To be a good food source for cattle we provide Hay for cows,for Dogs according  to the breed we will provide pedigree and some calcium suppliments,cats are usually meets eaters and we will also provide  some amount of milk for them,for birds we feed grains,wheat and millets,for pigs they usually  feed wastage of vegetables and wastage of food .  </p>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-grooming display-1 text-primary me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Grooming</h5>
                            <p>pets grooming refers to both the hygienic care and cleaning of a pet.it include bathing of  all pets, specially for dogs and cats it include trimming and brushing the hair. Grooming cleans the animals so that their color and coat charecterstics are natirally visible. We all should groom and fit our pets</p>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-dog display-1 text-primary me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Exercise</h5>
                            <p>Different pets like different activities depending on their personalities. most dogs enjoy running , playing and fetch something. And some cats enjoy playing with toys. Cows spend their large proportion of the day grassing. Pigs spend 75-80% of their time lying around and sleeping.Birds usually roaming inside the cage.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-vaccine display-1 text-primary me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Treatment</h5>
                            <p>Vaccinating our pets has long been consinderd one of the easiest ways to help them to live a long,healthy life. In our farmhouse every pet get the vaccination quaterly  or half quatrly in a year according to their breed. Along with this if any pet get injured or get any disease we will provide the immediate treatment for that</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5">
        <div class="container">
            
            <div class="row g-5">

            <!-- <?php

$stmt = $admin->ret("SELECT * FROM `pet_services` inner join `pet_table` on pet_table.pet_id = pet_services.pet_id");
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    ?> --><!-- 
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase"><?php echo $row['s_name'] ?></h2>
                        <h6 class="text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-primary p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">₹</small><?php echo $row['service_price'] ?><small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;"></small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                           
                            <div class=" align-items-center justify-content-between mb-1">
                             
                                <span style="text-align:center !important"><b>Description</b></span>
                                <hr>
                                <p><?php echo $row['short_desc'] ?></p>
                            </div>
                            <?php if(isset($_SESSION['cust_id'])) {?>
                            <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Book Now</a>
                            <?php } ?>
                        </div>
                    </div>
                </div> -->

                <!-- <?php } ?> -->
              
            </div>
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