<?php 
$con=mysqli_connect('localhost','root','','mogue_db');
if (mysqli_connect_errno()) {
	# code...
	echo "could not connect to mysql database".mysqli_connect_error();
}

 ?>