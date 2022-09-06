<?php


$con = new mysqli("Localhost","root","","unitropico");
	
	if($con->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_error . ") " . $con->connect_error;
	}


?>
