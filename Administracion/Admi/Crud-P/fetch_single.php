<?php
include('db.php');
include('audio.php');
include('function.php');
if(isset($_POST["user_id"]))
	
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM podcast 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["titulo"] = $row["titulo"];
		$output["descripcion"] = $row["descripcion"];
		$output["autor"] = $row["autor"];

		if($row["imagen"] != '')
		{
			$output['user_image'] = '<img src="Crud-P/upload/'.$row["imagen"].'" class="img-thumbnail" width="35%" /><input type="hidden" name="hidden_user_image" value="'.$row["imagen"].'" />';
		}
		else
		{
			$output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
		}
			if($row["audio"] != '')
		{
			$output['audio'] = '<audio controls>   
                                  <source src="Crud-P/audios/'.$row["audio"].'"  type="audio/mp3"></audio>      
		<input type="hidden" name="hidden_user_audios" value="'.$row["audio"].'" />';
		}
		else
		{
			$output['audio'] = '<input type="hidden" name="hidden_user_audios" value="" />';
		}
	}
	echo json_encode($output);
}
?>