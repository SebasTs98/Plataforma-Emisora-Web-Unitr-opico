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
			INSERT INTO publicacion (first_name, last_name, image,autor) 
			VALUES (:first_name, :last_name, :image,:autor)
		");
		$result = $statement->execute(
			array(
				':first_name'	=>	$_POST["first_name"],
				':last_name'	=>	$_POST["last_name"],
				
				':image'		=>	$image,
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
		$statement = $connection->prepare(
			"UPDATE publicacion 
			SET first_name = :first_name, last_name = :last_name, image = :image, autor =:autor  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':first_name'	=>	$_POST["first_name"],
				':last_name'	=>	$_POST["last_name"],				
				':image'		=>	$image,	
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