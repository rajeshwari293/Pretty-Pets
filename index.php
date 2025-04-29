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


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-uppercase text-dark mb-lg-4">Pet Farm</h1>
                    <h1 class="text-uppercase text-white mb-lg-4">We Care For Pets Like a Family</h1>
                    <!-- <p class="fs-4 text-white mb-lg-4">Buy Pets along with their products</p> -->
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="vido/InShot_20220920_011126081.mp4" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ms-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay muted loop"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="img/main.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h6 class="text-primary text-uppercase">About Us</h6>
                        <h1 class="display-5 text-uppercase mb-0">We Keep the Pets Happy All Time</h1>
                    </div>
                    <h4 class="text-body mb-4">Pets are humanizing. They remind us we have an obligation and responsibility to preserve and nurture and care for all life.</h4>
                    <div class="bg-light p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                    aria-selected="true">Our Mission</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false">Our Vision</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <p class="mb-0">The mission of farmhouse is to advance the health, safety and wellness of all pets by improving transparency and accountability, and seeks to strengthen the human-animal bond to improve the lives of people and their companion animals.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0">Our dedicated workers will ensure a safe,fun and nurturing environment for our pets while ensuring the best quality and personalized experience for you,your pet and your family</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <div>
<video width="1400" height="400"   autoplay muted loop>
  <source src="vido/pexels-taryn-elliott-7519241.mp4" type="video/mp4">
  <source src="vido/pexels-taryn-elliott-7519241.ogg" type="video/ogg">

</video>
</div>


    

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Services</h6>
                <h1 class="display-5 text-uppercase mb-0">Our Excellent Pet farmhouse Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-house display-1 text-primary me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Boarding</h5>
                            <p>  our famhouse is built on outskirts and further away from the city so that they can get fresh air and they can naturally adjusted to the weather. we have provided spacious places for all the pets.along with this every pet has seperate shelter facility  </p>
                        
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
                            <p>pets grooming refers to both the hygienic care and cleaning of a pet.it include bathing of  all pets, specially for dogs and cats it include trimming and brushing the hair. Grooming cleans the animals so that their color and coat charecterstics are natirally visible. We all should groom and fit our pets.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-dog display-1 text-primary me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Activities</h5>
                            <p>Different pets like different activities depending on their personalities. most dogs enjoy running , playing and fetch something. And some cats enjoy playing with toys. Cows spend their large proportion of the day grassing. Pigs spend 75-80% of their time lying around and sleeping.Birds usually roaming inside the cage. </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-item bg-light d-flex p-4">
                        <i class="flaticon-vaccine display-1 text-primary me-4"></i>
                        <div>
                            <h5 class="text-uppercase mb-3">Pet Treatment</h5>
                            <p> vaccinating our pets has long been consinderd one of the easiest ways to help them to live a long,healthy life. In our farmhouse every pet get the vaccination quaterly  or half quatrly in a year according to their breed. Along with this if any pet get injured or get any disease we will provide the immediate treatment for that.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5 text-uppercase mb-0">Products For our pets</h1>
            </div>
            <div class="owl-carousel product-carousel">
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-2new.png" alt="">
                        <h6 class="text-uppercase">Quality  Food for cats</h6>
                        <div class="btn-action d-flex justify-content-center">
                            
                            
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/greatdanenew.jpg" alt="">
                        <h6 class="text-uppercase">calcium suppliments for dog</h6>
                        <div class="btn-action d-flex justify-content-center">
                           
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/guineanew.jpg" alt="">
                        <h6 class="text-uppercase">food for bird</h6>
                
                        <div class="btn-action d-flex justify-content-center">
                            
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/hay.jpg" alt="">
                        <h6 class="text-uppercase"> food for cows</h6>
                        <div class="btn-action d-flex justify-content-center">
                            
                        </div>
                    </div>
                </div>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/pigfood.jpg" alt="">
                        <h6 class="text-uppercase">food for pigs</h6>
                        <div class="btn-action d-flex justify-content-center">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Products End -->


    
    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5">
        <div class="container">
          
            <div class="row g-5">

          <!--   <?php

$stmt = $admin->ret("SELECT * FROM `pet_services` inner join `pet_table` on pet_table.pet_id = pet_services.pet_id limit 3");
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    ?> -->
             <!--    <div class="col-lg-4">
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


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Team Members</h6>
                <h1 class="display-5 text-uppercase mb-0">Our Farmhouse Workers </h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding-right: 25px;">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="" style="width:300px !important;height: 300px !important" src="img/gayth.jpg" alt="">
                        <div class="team-overlay">
                            
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">SAVITHRI</h5>
                        <p class="m-0"> She has been working  since 2007 in our farmhouse</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="" style="width:300px !important;height: 300px !important" src="img/worker1.jpg" alt="">
                        <div class="team-overlay">

                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">KUMAR</h5>
                        <p class="m-0">He has been working  since 2007 in our farmhouse</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="" style="width:300px !important;height: 300px !important" src="img/worker2.jpg" alt="">
                        <div class="team-overlay">
                            
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">SATHISH</h5>
                        <p class="m-0">He has been working  since 2012 in our farmhouse</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="" style="width:300px !important;height: 300px !important" src="img/worker3.jpg" alt="">
                        <div class="team-overlay">
                            
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">SUNIL</h5>
                        <p class="m-0">He has been working  since 2018 in our farmhouse</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="" style="width:300px !important;height: 300px !important" src="img/sav1.jpg" alt="">
                        <div class="team-overlay">
                            
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">BASAMMA</h5>
                        <p class="m-0">She has been working  since 2008 in our farmhouse</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-img/kadammaje-farms-kadammaje-480521.jpg" style="margin: 45px 0;">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel bg-white p-5">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid mx-auto" src="img/owner.jpg" alt="">
                                <!-- <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;"> -->
                                    <!-- <i class="bi bi-chat-square-quote text-primary"></i> -->
                                <!-- </div> -->
                            </div>
                            <p>Mr Dinakar Gowda kadammaje was born on 4/2/1958 to late Ishwar Gowda and late Rammakka of Mogru village belthngadi taluk. He founded kadammaje farmhouse in 2007.. </p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase"> Mr Dinakar</h5>
                        
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid mx-auto" src="img/family.jpg" alt="">
                               <!-- <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote text-primary"></i>-->
                              <!-- </div> -->
                            </div>
                            <p>after the demise of Mr Dinakar then thier children continued to look's after this farmhouse.This farmhouse has variety of pets such as cows,dogs,birds etc. .</p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">Jai Prakash</h5>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <div class="container-fluid bg-testimonial py-5" style="margin: 45px 0;">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel bg-white p-5">
                   <?php  $stmt=$admin->ret("SELECT * from `feedback` inner join `customers` on customers.cust_id = feedback.cust_id");

    while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
?>

                    <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <i class="fa fa-user"></i>
                                <h4><u>Feedback</u></h4>
                                <!-- <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;"> -->
                                    <!-- <i class="bi bi-chat-square-quote text-primary"></i> -->
                                <!-- </div> -->
                            </div>
                            <p><?php echo $row['feedback'] ?></p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase"> <?php echo $row['cust_name'] ?></h5>
                        
                        </div>
                        <?php } ?>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h1 class="display-5 text-uppercase mb-0">Achievements</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="row g-0 bg-light overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                                <img class="img-fluid h-100" src="img/achivmnt1.jpg" style="object-fit: cover;">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="bi bi-bookmarks me-2"></i>Sadhanashree</small>
                                        <small><i class="bi bi-calendar-date me-2"></i>20/9/2014</small>
                                    </div>
                                    <h5 class="text-uppercase mb-3"> They awarded  as sadhanashree by JCI Belthangdi for their  tremendous service  towards pets in their farmhouse.</h5>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="row g-0 bg-light overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                                <img class="img-fluid h-100" src="img/krishi.jpg" style="object-fit: cover;">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="bi bi-bookmarks me-2"></i>shrama jeevana veekshana adhyana pravasa</small>
                                        <small><i class="bi bi-calendar-date me-2"></i>8/11/2015</small>
                                    </div>
                                    <h5 class="text-uppercase mb-3">apart from pet field they also awarded in the field of agriculture </h5>

                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            
        </div>
    </div>
    <!-- Blog End -->



        <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h1 class="display-5 text-uppercase mb-0">Blogs</h1>
            </div>
            <div class="row g-5">

                      <?php

$stmt = $admin->ret("SELECT * FROM `blogs`");
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="row g-0 bg-light overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                                <img class="img-fluid h-100" src="admin/controller/<?php echo $row['image'] ?>" style="object-fit: cover;">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="bi bi-bookmarks me-2"></i><?php echo $row['b_title'] ?></small>
                                        <small><i class="bi bi-calendar-date me-2"></i><?php echo $row['date'] ?></small>
                                    </div>
                                    <h5 class="text-uppercase mb-3"> <?php echo $row['short_desc'] ?></h5>
                                    <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="admin/controller/<?php echo $row['video'] ?>" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          <?php } ?>
            </div>
        </div>
    </div>
    

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
