<?php

function upload_audios()
{
	if(isset($_FILES["audios"]))
	{
		$extension = explode('.', $_FILES['audios']['name']);
		$new_name = rand() . '.' . $extension[1];
		$destination = 'audios/' . $new_name;
		move_uploaded_file($_FILES['audios']['tmp_name'], $destination);
		return $new_name;
	}
}

function get_audios_name($user_id)
{
	include('db.php');
	$statement = $connection->prepare("SELECT audio FROM programacion WHERE id = '$user_id'");
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row["audio"];
	}
}

function get_total_all_recordss()
{
	include('db.php');
	$statement = $connection->prepare("SELECT * FROM programacion");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

?>