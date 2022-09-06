<?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
	
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM banner 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		
		$output["descripcion"] = $row["descripcion"];
	

		if($row["imagen"] != '')
		{
			$output['user_image'] = '<img src="Crud-B/upload/'.$row["imagen"].'" class="img-thumbnail" width="35%" /><input type="hidden" name="hidden_user_image" value="'.$row["imagen"].'" />';
		}
		else
		{
			$output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
		}
			
	}
	echo json_encode($output);
}
?>