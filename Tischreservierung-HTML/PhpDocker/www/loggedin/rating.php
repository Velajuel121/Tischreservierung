<!doctype html>
<html>

<head>
	<!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TiRe - Reservations</title>


	<!-- PLUGINS CSS STYLE -->
	<link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Owl Carousel -->
	<link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
	<link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
	<!-- Fancy Box -->
	<link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
	<link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
	<!-- CUSTOM CSS -->
	<link href="css/style.css" rel="stylesheet">

	<!-- FAVICON -->
	<link href="img/favicon.png" rel="shortcut icon">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body class="body-wrapper">
    <div class="demo">

        <section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-expand-lg  navigation">
						<a class="navbar-brand" href="index.html">
							<img src="images/logo.png" alt="">
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						 aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto main-nav ">
								<li class="nav-item active">
									<a class="nav-link" href="login.php">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="reservations.php">Reservierungen</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="aboutus.php">Team</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="rating.php">Bewertung</a>
								</li>
                                <li class="nav-item">
									<a class="nav-link" href="myreservations.php">Meine Reservierungen</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="logout.php">Logout</a>
								</li>
							</ul>
							<ul class="navbar-nav ml-auto mt-10">
								<li class="nav-item">
                                    
									<a class="nav-link login-button" href="login.html">
                                        <?php
                                        echo '<section>';
                                        echo '<div class="container">';
                                        echo '<center><h3>'. htmlspecialchars($_SESSION["un"]) .'</h3></center>';
                                        echo '</div>';
                                        echo '</section>';
                                        $_SESSION['un'] = $_SESSION["un"];
                                        ?>
                                    </a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</section>



		<div class="container" id="container1">
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="text-center"><span class="glyphicon glyphicon-saved pull-right"></span></h4>
					</div>
					<div class="panel-body text-center">
						<p class="lead">
							<strong>Bewertung</strong>
						</p>
					</div>
					
					<ul class="list-group list-group-flush text-center">
						<li class="list-group-item">
							<div class="skillLineDefault">
								<div class="skill pull-left text-center">Küche</div>
								<div class="rating" id="rate1"></div>
							</div>
						</li>
						<li class="list-group-item text-center">
							<div class="skillLineDefault">
								<div class="skill pull-left text-center">Service</div>
								<div class="rating" id="rate2"></div>
							</div>
						</li>
						<li class="list-group-item text-center">
							<div class="skillLineDefault">
								<div class="skill pull-left text-center">Ambiente</div>
								<div class="rating" id="rate3"></div>
							</div>
						</li>
						<li class="list-group-item text-center">
							<div class="skillLineDefault">
								<div class="skill pull-left text-center">Qualität</div>
								<div class="rating" id="rate4"></div>
							</div>
						</li>
					</ul>
					<div class="panel-footer text-center">
						<button type="button" class="btn btn-primary btn-lg btn-block">
							Submit
						</button>
					</div>
				</div>
			</div>
		</div>
		<style>
			#container1 {
				margin-bottom: 120px;
				padding:20px;
				background-color:#f5f5f5;
			}
		
			.rating {
				margin-left: 30px;
				
			}
		
			div.skill {
				background: blue;
				border-radius: 3px;
				color: white;
				font-weight: bold;
				padding: 3px 4px;
				width: 70px;
			}
		
			.skillLine {
				display: inline-block;
				width: 100%;
				min-height: 90px;
				padding: 3px 4px;
				
			}
		
			skillLineDefault {
				padding: 3px 4px;
				
			}
		</style>
		
		<!-- you need to include the shieldui css and js assets in order for the charts to work -->
		<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
		<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
		
		<script type="text/javascript">
			initializeRatings();
		
			function initializeRatings() {
				$('#rate1').shieldRating({
					max: 5,
					step: 0.1,
					value: 0,
					markPreset: false
				});
				$('#rate2').shieldRating({
					max: 5,
					step: 0.1,
					value: 0,
					markPreset: false
				});
				$('#rate3').shieldRating({
					max: 5,
					step: 0.1,
					value: 0,
					markPreset: false
				});
				$('#rate4').shieldRating({
					max: 5,
					step: 0.1,
					value: 0,
					markPreset: false
				});
			}
		</script>
		
		<!-- Rating - END -->
		
		</div>





	<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
					<!-- About -->
					<div class="block about">
						<!-- footer logo -->
						<img src="images/logo-footer.png" alt="">
						<!-- description -->
						<p class="alt-color"></p>
					</div>
				</div>
				<!-- Link list -->
				<div class="col-lg-2 offset-lg-1 col-md-3">
					<div class="block">
						<h4>Seiten</h4>
						<ul>
							<li>
								<a href="./index.html">Startseite</a>
							</li>
							<li>
								<a href="./reservations.html">Reservation</a>
							</li>
							<li>
								<a href="./registration.html">Registrieren</a>
							</li>
							<li>
								<a href="./aboutus.html">Unser Team</a>
							</li>
							<li>
								<a href="./login.html">Login</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- Link list -->
				<div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
					<div class="block">
						<h4>Über Uns</h4>
						<ul>
							<li>
								<p>HTBLA Leonding</p>
							</li>
							<li>
									<p>Limesstraße 12-14</p>
							</li>
							<li>
									<p>4060 Leonding</p>
							</li>
							<li>
									<p>Oberösterreich</p>
							</li>
							<li>
									<p>Österreich</p>
							</li>
						</ul>
					</div>
				</div>
				<!-- Promotion -->
				<div class="col-lg-4 col-md-7">
					<!-- App promotion -->
					<div class="block-2 app-promotion">
						<a href="">
							<!-- Icon -->
							<img src="images/footer/phone-icon.png" alt="mobile-icon">
						</a>
						<p>Get the Dealsy Mobile App and Save more</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</footer>
	<!-- Footer Bottom -->
	<footer class="footer-bottom">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-12">
					<!-- Copyright -->
					<div class="copyright">
						<p>Copyright © 2016. All Rights Reserved</p>
					</div>
				</div>
				<div class="col-sm-6 col-12">
					<!-- Social Icons -->
					<ul class="social-media-icons text-right">
						<li>
							<a class="fa fa-facebook" href=""></a>
						</li>
						<li>
							<a class="fa fa-twitter" href=""></a>
						</li>
						<li>
							<a class="fa fa-pinterest-p" href=""></a>
						</li>
						<li>
							<a class="fa fa-vimeo" href=""></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Container End -->
		<!-- To Top -->
		<div class="top-to">
			<a id="top" class="" href="">
				<i class="fa fa-angle-up"></i>
			</a>
		</div>
	</footer>

	<!-- JAVASCRIPTS -->
	<script src="plugins/jquery/jquery.min.js"></script>
	<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="plugins/tether/js/tether.min.js"></script>
	<script src="plugins/raty/jquery.raty-fa.js"></script>
	<script src="plugins/bootstrap/dist/js/popper.min.js"></script>
	<script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
	<script src="plugins/slick-carousel/slick/slick.min.js"></script>
	<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
	<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
	<script src="js/scripts.js"></script>

</body>


</html>