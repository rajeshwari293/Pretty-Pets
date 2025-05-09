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
	<title>Alert</title>

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
							<div class="col-md-6">

								<div class="card">
									<div class="card-header">
										<strong class="card-title">Alerts</strong>
									</div>
									<div class="card-body">
										<div class="alert alert-primary" role="alert">
											This is a primary alert—check it out!
										</div>
										<div class="alert alert-secondary" role="alert">
											This is a secondary alert—check it out!
										</div>
										<div class="alert alert-success" role="alert">
											This is a success alert—check it out!
										</div>
										<div class="alert alert-danger" role="alert">
											This is a danger alert—check it out!
										</div>
										<div class="alert alert-warning" role="alert">
											This is a warning alert—check it out!
										</div>
										<div class="alert alert-info" role="alert">
											This is a info alert—check it out!
										</div>
										<div class="alert alert-light" role="alert">
											This is a light alert—check it out!
										</div>
										<div class="alert alert-dark" role="alert">
											This is a dark alert—check it out!
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header">
										<strong class="card-title">Link Color Alerts</strong>
									</div>
									<div class="card-body">
										<div class="alert alert-primary" role="alert">
											This is a primary alert with
											<a href="#" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-secondary" role="alert">
											This is a secondary alert with
											<a href="#" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-success" role="alert">
											This is a success alert with
											<a href="#" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-danger" role="alert">
											This is a danger alert with
											<a href="#" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-warning" role="alert">
											This is a warning alert with
											<a href="#" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-info" role="alert">
											This is a info alert with
											<a href="#" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-light" role="alert">
											This is a light alert with
											<a href="#" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
										<div class="alert alert-dark" role="alert">
											This is a dark alert with
											<a href="#" class="alert-link">an example link</a>. Give it a click if you like.
										</div>
									</div>
								</div>


							</div>


							<div class="col-md-6">

								<div class="card">
									<div class="card-header">
										<strong class="card-title">Dismissing Alerts</strong>
									</div>
									<div class="card-body">
										<div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
											<span class="badge badge-pill badge-primary">Success</span>
											You successfully read this important alert.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="sufee-alert alert with-close alert-secondary alert-dismissible fade show">
											<span class="badge badge-pill badge-secondary">Success</span>
											You successfully read this important alert.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
											<span class="badge badge-pill badge-success">Success</span>
											You successfully read this important alert.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
											<span class="badge badge-pill badge-danger">Success</span>
											You successfully read this important alert.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
											<span class="badge badge-pill badge-warning">Success</span>
											You successfully read this important alert.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
											<span class="badge badge-pill badge-info">Success</span>
											You successfully read this important alert.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="sufee-alert alert with-close alert-light alert-dismissible fade show">
											<span class="badge badge-pill badge-light">Success</span>
											You successfully read this important alert.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="sufee-alert alert with-close alert-dark alert-dismissible fade show">
											<span class="badge badge-pill badge-dark">Success</span>
											You successfully read this important alert.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

									</div>
								</div>

								<div class="card">
									<div class="card-header">
										<strong class="card-title">Contents</strong>
									</div>
									<div class="card-body">
										<div class="alert alert-success" role="alert">
											<h4 class="alert-heading">Well done!</h4>
											<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so
												that you can see how spacing within an alert works with this kind of content.</p>
											<hr>
											<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
										</div>

										<div class="alert alert-warning" role="alert">
											<h4 class="alert-heading">Well done!</h4>
											<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so
												that you can see how spacing within an alert works with this kind of content.</p>
											<hr>
											<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
										</div>

										<div class="alert alert-danger" role="alert">
											<h4 class="alert-heading">Well done!</h4>
											<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so
												that you can see how spacing within an alert works with this kind of content.</p>
											<hr>
											<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
										</div>
									</div>
								</div>



							</div>
						</div>
						<?php include 'footer.php' ?>

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
