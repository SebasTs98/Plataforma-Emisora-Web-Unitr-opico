<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
	
		$statement = $connection->prepare("
			INSERT INTO banner (nombre,imagen,descripcion) 
			VALUES (:banner,:image,:descripcion)
		");
		$result = $statement->execute(
			array(
				':banner'	=>	$_POST["banner"],							
				':image'		=>	$image,				
				':descripcion'	=>	$_POST["descripcion"],
				
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

		$statement = $connection->prepare(
			"UPDATE banner 
			SET  imagen =:image, descripcion =:descripcion  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
												
				':image'		=>	$image,		
				':descripcion'	=>	$_POST["descripcion"],		
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Banner Actualizado  Exitosamente';
		}
	}
}

?>