<?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
	
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM usertable 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["Nombre"] = $row["name"];
		$output["Correo"] = $row["email"];

	
	}
	echo json_encode($output);
}
?>