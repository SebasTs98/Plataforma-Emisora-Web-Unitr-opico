<?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
	
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM publicacion 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["first_name"] = $row["first_name"];
		$output["last_name"] = $row["last_name"];
		$output["autor"] = $row["autor"];
		if($row["image"] != '')
		{
			$output['user_image'] = '<img src="Crud/upload/'.$row["image"].'" class="img-thumbnail" width="50%" /><input type="hidden" name="hidden_user_image" value="'.$row["image"].'" />';
		}
		else
		{
			$output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
		}
	}
	echo json_encode($output);
}
?>