<?php
include('db.php');
include('function.php');
include('audios.php');
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
			INSERT INTO programacion (dia, image, audio, descripcion, nombre, autor, comienzo) 
			VALUES (:dia,:image,:audios,:descripcion,:nombre,:autor,:horaI)
		");
		$result = $statement->execute(
			array(
				':dia'	=>	$_POST["dia"],				
				':image'		=>	$image,
				':audios'		=>	$audios,
				':descripcion'	=>	$_POST["descripcion"],
				':nombre'	=>	$_POST["nombre"],		
				':autor'	=>	$_POST["autor"],
				':horaI'	=>	$_POST["horaI"],
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
			"UPDATE programacion
			SET dia = :dia, image = :image, audio =:audios, nombre = :nombre, descripcion =:descripcion, autor =:autor, comienzo =:horaI
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':dia'	=>	$_POST["dia"],				
				':image'		=>	$image,
				':audios'		=>	$audio,	
				':descripcion'	=>	$_POST["descripcion"],
				':nombre'	=>	$_POST["nombre"],		
				':autor'	=>	$_POST["autor"],
				':horaI'	=>	$_POST["horaI"],
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