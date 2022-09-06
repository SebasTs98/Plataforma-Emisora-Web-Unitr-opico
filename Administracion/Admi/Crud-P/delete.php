<?php
include('db.php');
include("function.php");
include("audio.php");
if(isset($_POST["user_id"]))
{
	$image = get_image_name($_POST["user_id"]);
	$audios = get_audios_name($_POST["user_id"]);
	if($image != '' && $audios != '')
	{
		unlink("upload/" . $image);
		unlink("audios/" . $audios);
	}
	$statement = $connection->prepare(
		"DELETE FROM podcast WHERE id = :id"
	);
	$result = $statement->execute(
		array(
			':id'	=>	$_POST["user_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Podcast Eliminado Exitosamente';
	}
}



?>