<?php
include('db.php');
include('function.php');
include('audios.php');
if(isset($_POST["user_id"]))
	
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM programacion
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["dia"] = $row["dia"];
		$output["nombre"] = $row["nombre"];
		$output["descripcion"] = $row["descripcion"];		
		$output["autor"] = $row["autor"];
		$output["horaI"] = $row["comienzo"];	
		if($row["image"] != '')
		{
			$output['user_image'] = '<img src="Crud-PRO/upload/'.$row["image"].'" class="img-thumbnail" width="30%" /><input type="hidden" name="hidden_user_image" value="'.$row["image"].'" />';
		}
		else
		{
			$output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';
		}

			if($row["audio"] != '')
		{
			$output['audio'] = '<audio width="240" height="160" controls>   
                                  <source src="Crud-PRO/audios/'.$row["audio"].'"  type="audio/mp3" width="20%" ></audio>      
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