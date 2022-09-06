<?php
include('db.php');
include('function.php');
include('audio.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		$audios = '';
		if($_FILES["audios"]["name"] != '')
		{
			$audios = upload_audios();
		}
		

		$statement = $connection->prepare("
			INSERT INTO podcast (titulo,imagen,audio, descripcion,autor) 
			VALUES (:titulo,:image,:audios,:descripcion,:autor)
		");
		$result = $statement->execute(
			array(
				':titulo'	=>	$_POST["titulo"],							
				':image'		=>	$image,
				':audios'		=>	$audios,
				':descripcion'	=>	$_POST["descripcion"],
				':autor'	=>	$_POST["autor"],
			)
		);
		if(!empty($result))
		{
			echo 'Datos insertados exitosamente';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		else
		{
			$image = $_POST["hidden_user_image"];
		}

		$audio = '';
		if($_FILES["audios"]["name"] != '')
		{
			$audio = upload_audios();
		}
		else
		{
			$audio = $_POST["hidden_user_image"];
		}

		$statement = $connection->prepare(
			"UPDATE podcast 
			SET titulo = :titulo, imagen =:image, audio =:audios, descripcion =:descripcion,autor =:autor  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':titulo'	=>	$_POST["titulo"],									
				':image'		=>	$image,	
				':audios'		=>	$audio,	
				':descripcion'	=>	$_POST["descripcion"],
				':autor'	=>	$_POST["autor"],		
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Datos Actualizados Con Exito';
		}
	}
}

?>