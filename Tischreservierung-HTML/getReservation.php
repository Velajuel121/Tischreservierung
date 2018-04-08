<?php

require_once('mysqli_connect.php');
$query = "SELECT guestName, guestEmail,Time,countOfPerson FROM guest,reservation WHERE guest.guestid = reservation.guestid";

$response = @mysqli_query($dbc,$query);

if($response){
	echo '<table align="left"
	cellspacing="5" cellpadding="8"
	
	<tr><td align="left"><b>guestName</b></td>
	<td align="left"><b>guestEmail</b></td>
	<td align="left"><b>Time</b></td>
	<td align="left"><b>countOfPerson</b></td></tr>';
	
	while($row = msqli_fetch_array($response)){
		echo '<tr><td align="left">' .
		$row['guestName'] . '</td><td align="left">' .
		$row['guestEmail'] . '</td><td align="left">' .
		$row['Time'] . '</td><td align="left">' .
		$row['countOfPerson'] . '</td><td align="left">';
		
		echo '</tr>';
	}
	echo '</table>';
} else {
	echo "Could not issue database query";
	
	echo mysqli_error($dbc);
}
myqsli_close($dbc);

?>