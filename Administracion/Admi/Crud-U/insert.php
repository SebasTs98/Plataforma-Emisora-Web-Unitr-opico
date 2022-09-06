<?php
include('db.php');
include('function.php');

if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		

		$statement = $connection->prepare("
			INSERT INTO usertable (name,email) 
			VALUES (:Nombre,:Correo)
		");
		$result = $statement->execute(
			array(
				':name'	=>	$_POST["Nombre"],						
				':email'	=>	$_POST["Correo"],
				
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
			"UPDATE usertable 
			SET name = :Nombre, email =:Correo  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(	
				':Nombre'	=>	$_POST["Nombre"],								
				':Correo'	=>	$_POST["Correo"],						
			    ':id'		=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Datos Actualizados Con Exito';
		}
	}
}

?>