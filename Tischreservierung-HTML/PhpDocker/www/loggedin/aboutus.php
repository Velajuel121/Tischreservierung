<?php
    session_start();
?>
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
									<a class="nav-link" href="reservations.html">Reservierungen</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="aboutus.html">Team</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="rating.html">Bewertung</a>
								</li>
                                <li class="nav-item">
									<a class="nav-link" href="myreservations.html">Meine Reservierungen</a>
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
        <div class="container">
                <div class="col-md-12 content-block">
                        <center><h1>Das Team</h1></center>
                        </div>

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/Pero.jpg" alt="" />
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">IT</h3>
                            <small class="post">Frontend Designer</small>
                            <small>Email:
                                <b>pekii.dju@gmail.com</b>
                            </small>
                        </div>
                        <div class="team-layer">
                            <a href="#">Pero Djukic</a>
                            <span class="post">Web Developer/Kopierer</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/Alen.jpeg" alt="" />
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">IT</h3>
                            <small class="post">Backend Dev</small>
                            <small>Email:
                                <b>alentick@gmail.com</b>
                            </small>
                        </div>
                        <div class="team-layer">
                            <a href="#">Alen Adzamija</a>
                            <span class="post">PHP Pro</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/Felix.jpeg" alt="" />
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Projektleitung</h3>
                            <small class="post">Frontend Designer & Backend Dev</small>
                            <small>Email:
                                <b>felix.kronsteiner@gmx.at</b>
                            </small>
                        </div>
                        <div class="team-layer">
                            <a href="#">Felix Kronsteiner</a>
                            <span class="post">Mann für alles</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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