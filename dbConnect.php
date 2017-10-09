<?php 


$conn = mysqli_connect("localhost", "admin", "admin123", "guitarlab");
if(!$conn) {
	die("Konekcija na bazu nije bila moguca.".mysql_error());
}


?>