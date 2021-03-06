<!DOCTYPE html>
<html lang="en">

<head>
    <!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TiRe - Admin Mainpage</title>
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

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="body-wrapper">
    
	
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
									<a class="nav-link" href="index.html">Home</a>
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
                                        $servername = "192.168.99.100";
                                        $username = "root";
                                        $password = "passme";
                                        $dbschema = "tischreservierung";
                                        $conn = new mysqli($servername, $username, $password,$dbschema);
    
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
        
        
                                        $un = $_POST["form-username"];
                                        $pw = $_POST["form-password"];
                                        if(strcasecmp($un,"admin") == 0 && strcasecmp($pw,"root") == 0){
                                            echo '<script language="javascript" type="text/javascript">';
                                            echo 'document.location="http://192.168.99.100/adminpage.html";';
                                            echo '</script>';
                                            exit();
                                        }
        
                                        $sql = "select * from guest where username = '".$un."' AND password = '".$pw."'";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            echo '<section>';
                                            echo '<div class="container">';
                                            echo '<center><h3>'. htmlspecialchars($_POST["form-username"]) .'</h3></center>';
                                            echo '</div>';
                                            echo '</section>';
                                        } else {
                                            echo '<section>';
                                            echo '<div class="container">';
                                            echo '<center><h1>Falsche Logindaten.</h1></center>';
                                            echo '<center><h1>Bitte versuchen Sie es erneut!</h1></center>';
                                            echo '</div>';
                                            echo '</section>';
                                        }
                                        $conn->close();
     
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
    <section>
        <center><h1>ihre Reservierungen einsehen</h1></center>
        <form action="readMyReservations.php" method="post">
        <div class="container">
            <div class="row">
				<div class="col-md-12">
                    <div class="form-group row">
                        <label for="input-fromDate" class="col-md-2 col-form-label-lg">Datum: </label>
                        <div class="col-md-2">
                            <input class="form-control" type="date" name="input-fromDate">
                        </div>
                        <div class="col-md-2">
                            <center><button type="submit" class="btn btn-primary">Suchen</button></center>
                        </div>
				    </div>
                </div>
            </div>
        </div>
        </form>
    </section>



</body>
</html>