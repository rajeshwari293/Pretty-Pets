
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Typography</title>

  <!-- Fontfaces CSS-->
  <link href="css/font-face.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
  <div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
      <div class="header-mobile__bar">
        <div class="container-fluid">
          <div class="header-mobile-inner">
            <a class="logo" href="index.html">
              <img src="images/icon/logo.png" alt="CoolAdmin" />
            </a>
            <button class="hamburger hamburger--slider" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
        </div>
      </div>
      <nav class="navbar-mobile">
        <div class="container-fluid">
          <ul class="navbar-mobile__list list-unstyled">
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="index.html">Dashboard 1</a>
                </li>
                <li>
                  <a href="index2.html">Dashboard 2</a>
                </li>
                <li>
                  <a href="index3.html">Dashboard 3</a>
                </li>
                <li>
                  <a href="index4.html">Dashboard 4</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="chart.html">
                <i class="fas fa-chart-bar"></i>Charts</a>
            </li>
            <li>
              <a href="table.html">
                <i class="fas fa-table"></i>Tables</a>
            </li>
            <li>
              <a href="form.html">
                <i class="far fa-check-square"></i>Forms</a>
            </li>
            <li>
              <a href="calendar.html">
                <i class="fas fa-calendar-alt"></i>Calendar</a>
            </li>
            <li>
              <a href="map.html">
                <i class="fas fa-map-marker-alt"></i>Maps</a>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-copy"></i>Pages</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="login.html">Login</a>
                </li>
                <li>
                  <a href="register.html">Register</a>
                </li>
                <li>
                  <a href="forget-pass.html">Forget Password</a>
                </li>
              </ul>
            </li>
            <li class="has-sub">
              <a class="js-arrow" href="#">
                <i class="fas fa-desktop"></i>UI Elements</a>
              <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                <li>
                  <a href="button.html">Button</a>
                </li>
                <li>
                  <a href="badge.html">Badges</a>
                </li>
                <li>
                  <a href="tab.html">Tabs</a>
                </li>
                <li>
                  <a href="card.html">Cards</a>
                </li>
                <li>
                  <a href="alert.html">Alerts</a>
                </li>
                <li>
                  <a href="progress-bar.html">Progress Bars</a>
                </li>
                <li>
                  <a href="modal.html">Modals</a>
                </li>
                <li>
                  <a href="switch.html">Switchs</a>
                </li>
                <li>
                  <a href="grid.html">Grids</a>
                </li>
                <li>
                  <a href="fontawesome.html">Fontawesome Icon</a>
                </li>
                <li>
                  <a href="typo.html">Typography</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <?php include 'sidebar.php' ?>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
      <!-- HEADER DESKTOP-->
      <?php include 'header.php' ?>

      <!-- END HEADER DESKTOP-->

      <!-- MAIN CONTENT-->
      <div class="main-content">
        <div class="section__content section__content--p30">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">


                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Typography</strong>
                  </div>

                  <div class="card-body">
                    <div class="typo-headers">
                      <h1 class="pb-2 display-4">Very Important Information H1</h1>
                      <h2 class="pb-2 display-5">Sections & Modal Names H2</h2>
                      <h3 class="pb-2 display-5">Articles & Block Headings H3</h3>
                      <h4 class="pb-2 display-5">Random Tiny Heading H4</h4>
                      <h5 class="pb-2 display-5">Random Tiny Heading H5</h5>
                      <h6 class="pb-4 display-5">Random Tiny Heading H6</h6>
                    </div>
                    <div class="typo-articles">
                      <p>
                        The unique stripes of zebras make them one of the animals most familiar to people. They occur in a variety of habitats, such
                        as grasslands, savannas,
                        <span class="bg-flat-color-1 text-light">woodlands</span>, thorny scrublands,
                        <span class="clickable-text">mountains</span>
                        , and coastal hills. However, various anthropogenic factors have had a severe impact on zebra populations, in particular
                        hunting for skins and habitat destruction. Grévy's zebra and the mountain
                        <mark>highlighted text</mark> zebra are endangered.</p>
                      <blockquote class="blockquote mt-3 text-right">
                        <p>
                          Blockquotes. However, various anthropogenic factors have had a severe impact on zebra populations, in particular hunting
                          for skins. </p>
                        <footer class="blockquote-footer">Jefferey Lebowski</footer>
                      </blockquote>
                      <p>
                        lthough zebra species may have overlapping ranges, they do not interbreed. In captivity, plains zebras have been crossed
                        with mountain zebras. The hybrid foals
                        <span class="bg-flat-color-1 text-light">selected text</span> lacked a dewlap and resembled their
                      </p>
                    </div>
                    <div class="vue-lists">
                      <h2 class="mb-4">Lists</h2>
                      <div class="row">
                        <div class="col-md-6">
                          <h3>Unordered</h3>
                          <ul>
                            <li>
                              A wide variety of hypotheses have been proposed to account for the evolution of the striking stripes of zebras.
                            </li>
                            <li>The more traditional of these (1 and 2, below) relate to camouflage.</li>
                            <li>The vertical striping may help the zebra hide in the grass by disrupting its outline.</li>
                            <li>
                              In addition, even at moderate distances, the striking striping merges to an apparent grey.
                              <ul class="vue-list-inner">
                                <li>However, the camouflage has been contested with arguments that most of a zebra's predator.</li>
                                <li>Such as lions and hyenas cannot see well at a distance.</li>
                                <li>More likely to have smelled or heard a zebra.</li>
                              </ul>
                            </li>
                            <li>Before seeing it from a distance, especially at night.</li>
                          </ul>
                        </div>
                        <div class="col-md-6 text-left">
                          <div>
                            <h3>Ordered</h3>
                            <ol class="vue-ordered">
                              <li>
                                A wide variety of hypotheses have been proposed to account for the evolution of the striking stripes of zebras.
                              </li>
                              <li>The more traditional of these (1 and 2, below) relate to camouflage.</li>
                              <li>The vertical striping may help the zebra hide in the grass by disrupting its outline.</li>
                              <li>
                                In addition, even at moderate distances, the striking striping merges to an apparent grey.
                                <ul class="vue-list-inner">
                                  <li>However, the camouflage has been contested with arguments that most of a zebra's predator.
                                  </li>
                                  <li>Such as lions and hyenas cannot see well at a distance.</li>
                                  <li>More likely to have smelled or heard a zebra.</li>
                                </ul>
                              </li>
                              <li>Before seeing it from a distance, especially at night.</li>
                            </ol>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="vue-misc">
                      <h2 class="display-5 my-3">Misc</h2>
                      <div class="row">
                        <div class="col-md-6">
                          <h3>Address</h3>
                          <address class="mt-3">
                            <strong>SJØNNA</strong>
                            <br> Nezalezhnasti Ave, 13 - 28A
                            <br> Minsk, Belarus, 220141
                            <br> +375 29 319-53-98
                            <br>
                            <br>
                            <b>Vasili Savitski</b>
                            <br>
                            <a href="mailto">hello@examplemail.com</a>

                          </address>
                        </div>
                        <div class="col-md-6">
                          <h3 class="mb-3">Well</h3>
                          <div class="jumbotron">
                            Zebras have excellent eyesight. It is believed that they can see in color. Like most ungulates, the zebra's eyes are on the
                            sides of its head, giving it a wide field of view.
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE CONTAINER-->

  </div>

  <!-- Jquery JS-->
  <script src="vendor/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap JS-->
  <script src="vendor/bootstrap-4.1/popper.min.js"></script>
  <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
  <!-- Vendor JS       -->
  <script src="vendor/slick/slick.min.js">
  </script>
  <script src="vendor/wow/wow.min.js"></script>
  <script src="vendor/animsition/animsition.min.js"></script>
  <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
  </script>
  <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
  <script src="vendor/counter-up/jquery.counterup.min.js">
  </script>
  <script src="vendor/circle-progress/circle-progress.min.js"></script>
  <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="vendor/chartjs/Chart.bundle.min.js"></script>
  <script src="vendor/select2/select2.min.js">
  </script>

  <!-- Main JS-->
  <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
