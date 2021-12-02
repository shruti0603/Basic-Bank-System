<?php
	
$conn = mysqli_connect('localhost','id17982024_bankuser','V/c1$8Hsw>f|^Qrs','id17982024_bankdb');


if(!$conn){
	echo("Could not connect to the database due to the following error --> ".mysqli_connect_error());
}
	
	
mysqli_set_charset($conn,'utf8');

?>