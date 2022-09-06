<?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
	
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM videos 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["titulo"] = $row["titulo"];
		$output["url"] = $row["url"];
	
	}
	echo json_encode($output);
}
?>