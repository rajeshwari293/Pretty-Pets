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
  <title>Switch</title>

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
                    <strong class="card-title">3D Switch</strong>
                  </div>
                  <div class="card-body">
                    <label class="switch switch-3d switch-primary mr-3">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-3d switch-secondary mr-3">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-3d switch-success mr-3">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-3d switch-warning mr-3">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-3d switch-info mr-3">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-3d switch-danger mr-3">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                  </div>
                </div>
              </div>
              <!--/.col-->

              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Switch Default</strong>
                  </div>
                  <div class="card-body">
                    <label class="switch switch-default switch-primary mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-default switch-secondary mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-default switch-success mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-default switch-warning mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-default switch-info mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                    <label class="switch switch-default switch-danger mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                  </div>
                </div>
              </div>
              <!--/.col-->


              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Switch Default - Pills</strong>
                  </div>
                  <div class="card-body">
                    <label class="switch switch-default switch-pill switch-primary mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-pill switch-secondary mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-pill switch-success mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-pill switch-warning mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-pill switch-info mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-pill switch-danger mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                  </div>
                </div>
              </div>
              <!--/.col-->


              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Switch Outline</strong>
                  </div>
                  <div class="card-body">
                    <label class="switch switch-default switch-primary-outline mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-secondary-outline mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-success-outline mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-warning-outline mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-info-outline mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-danger-outline mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                  </div>
                </div>
              </div>
              <!--/.col-->


              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Switch Outline - Pills</strong>
                  </div>
                  <div class="card-body">
                    <label class="switch switch-default switch-primary-outline switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-secondary-outline switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-success-outline switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-warning-outline switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-info-outline switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-danger-outline switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                  </div>
                </div>
              </div>
              <!--/.col-->

              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Switch Outline Alternative</strong>
                  </div>
                  <div class="card-body">
                    <label class="switch switch-default switch-primary-outline-alt mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-secondary-outline-alt mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-success-outline-alt mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-warning-outline-alt mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-info-outline-alt mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-danger-outline-alt mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                  </div>
                </div>
              </div>
              <!--/.col-->


              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Switch Outline Alternative - Pills</strong>
                  </div>
                  <div class="card-body">
                    <label class="switch switch-default switch-primary-outline-alt switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-secondary-outline-alt switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-success-outline-alt switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-warning-outline-alt switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-info-outline-alt switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-default switch-danger-outline-alt switch-pill mr-2">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>
                  </div>
                </div>
              </div>
              <!--/.col-->


              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Switch with Text</strong>
                  </div>
                  <div class="card-body">
                    <label class="switch switch-text switch-primary">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-secondary">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-success">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-warning">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-info">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-danger">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                  </div>
                </div>
              </div>
              <!--/.col-->


              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title">Switch with Text - Pills</strong>
                  </div>
                  <div class="card-body">

                    <label class="switch switch-text switch-primary switch-pill">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-secondary switch-pill">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-success switch-pill">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-warning switch-pill">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-info switch-pill">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                    <label class="switch switch-text switch-danger switch-pill">
                      <input type="checkbox" class="switch-input" checked="true">
                      <span data-on="On" data-off="Off" class="switch-label"></span>
                      <span class="switch-handle"></span>
                    </label>

                  </div>
                </div>
              </div>
              <!--/.col-->


              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <strong class="card-title" v-if="headerText">Sizes</strong>
                  </div>
                  <div class="card-body p-0">
                    <table class="table table-hover table-striped table-align-middle mb-0">
                      <thead>
                        <th>Size</th>
                        <th>Example</th>
                        <th>CSS Class</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            Large
                          </td>
                          <td>
                            <basix-switch type="3d" variant="primary" size="lg" :checked="true" />
                          </td>
                          <td>
                            Add following code
                            <code>size="lg"</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Default
                          </td>
                          <td>
                            <basix-switch type="3d" variant="primary" :checked="true" />
                          </td>
                          <td>

                          </td>
                        </tr>
                        <tr>
                          <td>
                            Small
                          </td>
                          <td>
                            <basix-switch type="3d" variant="primary" size="sm" :checked="true" />
                          </td>
                          <td>
                            Add following code
                            <code>size="sm"</code>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            Extra small
                          </td>
                          <td>
                            <basix-switch type="3d" variant="primary" size="xs" :checked="true" />
                          </td>
                          <td>
                            Add following code
                            <code>size="xs"</code>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--/.col-->
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
