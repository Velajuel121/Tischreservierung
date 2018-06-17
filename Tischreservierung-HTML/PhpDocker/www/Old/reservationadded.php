<?php

if(isset($_POST['submit'])){
	$data_missing = array();
	
	if(empty($_POST['name'])){
		$data_missing[] = 'NAME';
	} else {
			$name = ($_POST['name']);
	}
	if(empty($_POST['persons'])){
		$data_missing[] = 'PERSONS';
	} else {
			$persons = ($_POST['persons']);
	}
	if(empty($_POST['date'])){
		$data_missing[] = 'DATE';
	} else {
			$date = ($_POST['date']);
	}
	if(empty($_POST['12:00'])){
		$data_missing[] = 'TIME';
	} else {
			$time = ($_POST['12:00']);
	}
	if(empty($data_missing)){
		require_once('mysqli_connect.php');

		$query1 = "INSERT INTO reservation (idReservation,guestid,Time,countOfPersons) values (?,?,?,?)";
		$stmt1 = mysqli_prepare($dbc, $query1);
		mysqli_stmt_bind_param($stmt, "iisi", 1,1,$date,$persons);
		mysqli_stmt_execute($stmt);
		$affected_rows = mysqli_stmt_affected_rows($stmt);
		if($affected_rows == 1){
			echo 'Reservation went through';
			mysqli_stmt_close($stmt);
			mysqli_close($dbc);
	} else {
		echo 'Error Occured <br />':
		echo mysqli_error();
		mysqli_stmt_close($stmt);
			mysqli_close($dbc);
	}
} else {
	echo 'You need to enter the following data<br />';
	foreach($data_missing as $missing){
		echo "$missing<br />";
	}
}
?>

<form action="reservationadded.php" method="post">
        <div class="header">
            <h1>Schliesse deine Reservierung ab</h1>

        </div>
        <div class="format">

            <div class="RestaurantName">
                <h2>Hier k&ouml;nnte ihr Restaurant name stehen</h2>
            </div>
            <div class="formularData">
                <div class="name">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" style="width: auto"/><br/><br/><br/>
                </div>
                <div class="persons">
                    <label for="persons">Personen: </label>
                    <input type="text" name="persons" id="persons" value="2"/>
                </div>
                <div class="date">
                    <label>Datum: </label>
                    <input type="text" id="datepicker" name="date" placeholder="Datum ausw&auml;hlen" style="width: auto" />
                </div>
                <div class="time">
                    <label>Uhrzeit: </label>
                </div>
                    <div class="btn-group">
                        <button class="button" name="12:00">12:00</button>
                        <button class="button" name="12:00">12:15</button>
                        <button class="button" name="12:00">12:30</button>
                        <button class="button" name="12:00">12:45</button>
                        <button class="button" name="12:00">13:00</button>
                        <button class="button" name="12:00">13:15</button>
                        <button class="button" name="12:00">13:30</button>
                        <button class="button" name="12:00">13:45</button>
                        <button class="button" name="12:00">14:00</button>
                        <button class="button" name="12:00">14:15</button>
                        <button class="button" name="12:00">14:30</button>
                        <button class="button" name="12:00">14:45</button>
                        <button class="button" name="12:00">15:00</button>
                        <button class="button" name="12:00">15:15</button>
                        <button class="button" name="12:00">15:30</button>
                        <button class="button" name="12:00">15:45</button>
                        <button class="button" name="12:00">16:00</button>
                        <button class="button" name="12:00">16:15</button>
                        <button class="button" name="12:00">16:30</button>
                        <button class="button" name="12:00">16:45</button>
                        <button class="button" name="12:00">17:00</button>
                    </div>
                
                <div class="reservate">
                    <button class="button" name="submit" value="Send">Jetzt reservieren</button>
                </div>
            </div>
        </div>
         <script src=RegistrationPage_JS.js ></script>
	</form>