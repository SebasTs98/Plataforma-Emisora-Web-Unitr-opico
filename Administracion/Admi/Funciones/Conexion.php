<?php


$conn = new mysqli("localhost","root","","unitropico");
	
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_error . ") " . $conn->connect_error;
	}


?>
