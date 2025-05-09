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
    <title>Button</title>

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
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- LEFT BLOCK -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Badges </strong>
                                        <small>Use this class
                                            <code>&lt;a&gt;</code>,
                                            <code>&lt;button&gt;</code> or
                                            <code>&lt;input&gt;</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button" class="btn btn-danger">Danger</button>
                                        <button type="button" class="btn btn-warning">Warning</button>
                                        <button type="button" class="btn btn-info">Info</button>
                                        <button type="button" class="btn btn-link">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->


                                <div class="card">
                                    <div class="card-header">
                                        <strong>Button tags </strong>
                                        <small>Use this class
                                            <code>.btn</code> or
                                            <code>&lt;button&gt;</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <a class="btn btn-primary" href="#" role="button">Link</a>
                                        <button class="btn btn-danger" type="submit">Button</button>
                                        <input class="btn btn-info" type="button" value="Input">
                                        <input class="btn btn-success" type="submit" value="Submit">
                                        <input class="btn btn-warning" type="reset" value="Reset">
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Disabled state </strong>
                                        <small>Use this class
                                            <code>disabled="disabled"</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary" disabled>Primary</button>
                                        <button type="button" class="btn btn-secondary" disabled>Secondary</button>
                                        <button type="button" class="btn btn-success" disabled>Success</button>
                                        <button type="button" class="btn btn-danger" disabled>Danger</button>
                                        <button type="button" class="btn btn-warning" disabled>Warning</button>
                                        <button type="button" class="btn btn-info" disabled>Info</button>
                                        <button type="button" class="btn btn-link" disabled>Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->


                                <div class="card">
                                    <div class="card-header">
                                        <strong>Button with Icons </strong>
                                        <small>Use
                                            <code>&lt;i&gt;</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fa fa-star"></i>&nbsp; Primary</button>
                                        <button type="button" class="btn btn-secondary">
                                            <i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                                        <button type="button" class="btn btn-success">
                                            <i class="fa fa-magic"></i>&nbsp; Success</button>
                                        <button type="button" class="btn btn-warning">
                                            <i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                                        <button type="button" class="btn btn-danger">
                                            <i class="fa fa-rss"></i>&nbsp; Danger</button>
                                        <button type="button" class="btn btn-link">
                                            <i class="fa fa-link"></i>&nbsp; Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->


                                <div class="card">
                                    <div class="card-header">
                                        <strong>Small Button </strong>
                                        <small>Use this class
                                            <code>.btn-sm</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary btn-sm">Primary</button>
                                        <button type="button" class="btn btn-secondary btn-sm">Secondary</button>
                                        <button type="button" class="btn btn-success btn-sm">Success</button>
                                        <button type="button" class="btn btn-warning btn-sm">Warning</button>
                                        <button type="button" class="btn btn-danger btn-sm">Danger</button>
                                        <button type="button" class="btn btn-link btn-sm">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Small Button with Icons </strong>
                                        <small>Use this class
                                            <code>.btn-sm</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            <i class="fa fa-star"></i>&nbsp; Primary</button>
                                        <button type="button" class="btn btn-secondary btn-sm">
                                            <i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                                        <button type="button" class="btn btn-success btn-sm">
                                            <i class="fa fa-magic"></i>&nbsp; Success</button>
                                        <button type="button" class="btn btn-warning btn-sm">
                                            <i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-rss"></i>&nbsp;Danger</button>
                                        <button type="button" class="btn btn-link btn-sm">
                                            <i class="fa fa-link"></i>&nbsp; Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Large Button </strong>
                                        <small>Use this class
                                            <code>.btn-lg</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary btn-lg">Primary</button>
                                        <button type="button" class="btn btn-secondary btn-lg">Secondary</button>
                                        <button type="button" class="btn btn-success btn-lg">Success</button>
                                        <button type="button" class="btn btn-warning btn-lg">Warning</button>
                                        <button type="button" class="btn btn-danger btn-lg">Danger</button>
                                        <button type="button" class="btn btn-link btn-lg">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Large Active Button </strong>
                                        <small>Use this class
                                            <code>.btn-lg .active</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary btn-lg active">Primary</button>
                                        <button type="button" class="btn btn-secondary btn-lg active">Secondary</button>
                                        <button type="button" class="btn btn-success btn-lg active">Success</button>
                                        <button type="button" class="btn btn-warning btn-lg active">Warning</button>
                                        <button type="button" class="btn btn-danger btn-lg active">Danger</button>
                                        <button type="button" class="btn btn-link btn-lg active">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Block Level Buttons </strong>
                                        <small>Use this class
                                            <code>.btn-block</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                                        <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>

                                        <button type="button" class="btn btn-primary btn-lg btn-block">Primary</button>
                                        <button type="button" class="btn btn-secondary btn-lg btn-block">Secondary</button>
                                        <button type="button" class="btn btn-success btn-lg btn-block">Success</button>
                                        <button type="button" class="btn btn-warning btn-lg btn-block">Warning</button>
                                        <button type="button" class="btn btn-danger btn-lg btn-block">Danger</button>
                                        <button type="button" class="btn btn-link btn-lg btn-block">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- END LEFT BLOCK -->

                            <!-- RIGHT BLOCK -->
                            <div class="col-md-6">

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Outline Buttons </strong>
                                        <small>Use this class
                                            <code>&lt;a&gt;</code>,
                                            <code>&lt;button&gt;</code> or
                                            <code>&lt;input&gt;</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                        <button type="button" class="btn btn-outline-success">Success</button>
                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                        <button type="button" class="btn btn-outline-warning">Warning</button>
                                        <button type="button" class="btn btn-outline-info">Info</button>
                                        <button type="button" class="btn btn-outline-link">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->


                                <div class="card">
                                    <div class="card-header">
                                        <strong>Button tags </strong>
                                        <small>Use this class
                                            <code>.btn</code> or
                                            <code>&lt;button&gt;</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <a class="btn btn-outline-primary" href="#" role="button">Link</a>
                                        <button class="btn btn-outline-danger" type="submit">Button</button>
                                        <input class="btn btn-outline-info" type="button" value="Input">
                                        <input class="btn btn-outline-success" type="submit" value="Submit">
                                        <input class="btn btn-outline-warning" type="reset" value="Reset">
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Disabled state </strong>
                                        <small>Use this class
                                            <code>disabled="disabled"</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary" disabled>Primary</button>
                                        <button type="button" class="btn btn-outline-secondary" disabled>Secondary</button>
                                        <button type="button" class="btn btn-outline-success" disabled>Success</button>
                                        <button type="button" class="btn btn-outline-danger" disabled>Danger</button>
                                        <button type="button" class="btn btn-outline-warning" disabled>Warning</button>
                                        <button type="button" class="btn btn-outline-info" disabled>Info</button>
                                        <button type="button" class="btn btn-outline-link" disabled>Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->


                                <div class="card">
                                    <div class="card-header">
                                        <strong>Button with Icons </strong>
                                        <small>Use
                                            <code>&lt;i&gt;</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary">
                                            <i class="fa fa-star"></i>&nbsp; Primary</button>
                                        <button type="button" class="btn btn-outline-secondary">
                                            <i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                                        <button type="button" class="btn btn-outline-success">
                                            <i class="fa fa-magic"></i>&nbsp; Success</button>
                                        <button type="button" class="btn btn-outline-warning">
                                            <i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                                        <button type="button" class="btn btn-outline-danger">
                                            <i class="fa fa-rss"></i>&nbsp; Danger</button>
                                        <button type="button" class="btn btn-outline-link">
                                            <i class="fa fa-link"></i>&nbsp; Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->


                                <div class="card">
                                    <div class="card-header">
                                        <strong>Small Button </strong>
                                        <small>Use this class
                                            <code>.btn-sm</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary btn-sm">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm">Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-sm">Success</button>
                                        <button type="button" class="btn btn-outline-warning btn-sm">Warning</button>
                                        <button type="button" class="btn btn-outline-danger btn-sm">Danger</button>
                                        <button type="button" class="btn btn-outline-link btn-sm">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Small Button with Icons </strong>
                                        <small>Use this class
                                            <code>.btn-sm</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary btn-sm">
                                            <i class="fa fa-star"></i>&nbsp; Primary</button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm">
                                            <i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-sm">
                                            <i class="fa fa-magic"></i>&nbsp; Success</button>
                                        <button type="button" class="btn btn-outline-warning btn-sm">
                                            <i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                                        <button type="button" class="btn btn-outline-danger btn-sm">
                                            <i class="fa fa-rss"></i>&nbsp;Danger</button>
                                        <button type="button" class="btn btn-outline-link btn-sm">
                                            <i class="fa fa-link"></i>&nbsp; Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Large Button </strong>
                                        <small>Use this class
                                            <code>.btn-lg</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary btn-lg">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary btn-lg">Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-lg">Success</button>
                                        <button type="button" class="btn btn-outline-warning btn-lg">Warning</button>
                                        <button type="button" class="btn btn-outline-danger btn-lg">Danger</button>
                                        <button type="button" class="btn btn-outline-link btn-lg">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Large Active Button </strong>
                                        <small>Use this class
                                            <code>.btn-lg .active</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary btn-lg active">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary btn-lg active">Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-lg active">Success</button>
                                        <button type="button" class="btn btn-outline-warning btn-lg active">Warning</button>
                                        <button type="button" class="btn btn-outline-danger btn-lg active">Danger</button>
                                        <button type="button" class="btn btn-outline-link btn-lg active">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Block Level Buttons </strong>
                                        <small>Use this class
                                            <code>.btn-block</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary btn-lg btn-block">Block level button</button>
                                        <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Block level button</button>

                                        <button type="button" class="btn btn-outline-primary btn-lg btn-block">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-lg btn-block">Success</button>
                                        <button type="button" class="btn btn-outline-warning btn-lg btn-block">Warning</button>
                                        <button type="button" class="btn btn-outline-danger btn-lg btn-block">Danger</button>
                                        <button type="button" class="btn btn-outline-link btn-lg btn-block">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- END RIGHT BLOCK -->
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
