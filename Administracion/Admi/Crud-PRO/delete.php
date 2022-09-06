<?php

include('db.php');
include("function.php");
include('audios.php');
if(isset($_POST["user_id"]))
{
	$image = get_image_name($_POST["user_id"]);
	$audios = get_audios_name($_POST["user_id"]);
	if($image != '')
	{
		unlink("upload/" . $image);
		unlink("audios/" . $audios);
	}
	$statement = $connection->prepare(
		"DELETE FROM programacion WHERE id = :id"
	);
	$result = $statement->execute(
		array(
			':id'	=>	$_POST["user_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Programa Eliminado Exitosamente';
	}
}



?>