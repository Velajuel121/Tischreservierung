<!DOCTYPE html>
<html lang="en">

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

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">

    <div class="container">
        <?php
            $servername = "192.168.99.100";
            $username = "root";
            $password = "passme";
            $dbschema = "tischreservierung";
            $conn = new mysqli($servername, $username, $password,$dbschema);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            $email = $_POST["form-email"];
            $firstname = $_POST["form-firstname"];
            $lastname = $_POST["form-lastname"];
            $un = $_POST["form-username"];
            $password = $_POST["form-password"];

            $sql = "insert into guest(firstname,lastname,email,username,password) values ('".$firstname."', '".$lastname."', '".$email."', '".$un."', '".$password."')";

            if ($conn->query($sql) == TRUE) {
                 echo '<section>';
                echo '<div class="container">';
                
                echo '<center><h1>Vielen Dank für Ihre Registrierung</h2></center>';
                echo '<ul class="list-group" style="border-style: solid;">';
                        echo '  <li class="list-group-item">Email: '.$email.'</li>';
                        echo '  <li class="list-group-item">Vorname: '.$firstname.'</li>';
                        echo '  <li class="list-group-item">Nachname: '.$lastname.'</li>';
                        echo '  <li class="list-group-item">Username: '.$un.'</li>';
                        echo '  <li class="list-group-item">Password: '.$password.'</li>';
                        echo '</ul>';
                        echo '<br/>';
                
                echo '</div>';
                echo '</section>';


            } else {
                echo '<section>';
                echo '<div class="container">';
                echo '<center><h1>Es tut uns Leid aber etwas ist fehlgeschlagen.</h1></center>';
                echo '<center><h1>Bitte versuchen Sie es erneut!</h1></center>';
                echo '</div>';
                echo '</section>';
            }
        
            echo '<center>';
            echo '<button onclick="window.location.href=\'http://192.168.99.100/index.html\'" type="submit" class="btn btn-primary">Home</button>';
            echo '<button style="margin-left: 25px" onclick="window.location.href=\'http://192.168.99.100/login.html\'" type="submit" class="btn btn-primary">Sofort zum Login</button>';
            echo '</div>';
            echo '</center>';

            $conn->close();
        ?>
    </div>
    
    <!--<div class="container">
        <div class="form">
          <h1>Thanks for stopping by</h1>
              
          <p><?= 'You have been logged out!'; ?></p>
          
          <a href="index.html"><button class="button button-block"/>Home</button></a>

        </div>
    </div>
    -->
    
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