<?php
include('db.php');


	if($_POST["operation"] == "Add")
	{
		

		$statement = $connection->prepare("
			INSERT INTO videos (url,titulo) 
			VALUES (:url,:titulo)


		");
		$result = $statement->execute(
			array(

				':url'	=>	$_POST["url"],
				':titulo'	=>	$_POST["titulo"],					
			
				
			)
		);
		if(!empty($result))
		{
			echo 'Datos insertados exitosamente';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		
		$statement = $connection->prepare(
			"UPDATE videos 
			SET url =:url, titulo =:titulo  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(

											
				':url'	=>	$_POST["url"],
				':titulo'	=>	$_POST["titulo"],								
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Url Actualizado  Exitosamente';
		}
	}

?>