<?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
	
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM peticiones
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["nombre"] = $row["nombre"];
		$output["correo"] = $row["correo"];
		$output["motivo"] = $row["motivo"];
		$output["mensaje"] = $row["mensaje"];
		
	}
	echo json_encode($output);
}
?>