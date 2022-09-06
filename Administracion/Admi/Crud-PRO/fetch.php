<?php
include('db.php');
include('function.php');
include('audios.php');
$query = '';
$output = array();
$query .= "SELECT * FROM programacion ";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE dia LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR descripcion LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR nombre LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR autor LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY id DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	$image = '';
	if($row["image"] != '')
	{
	$image = '<div  class="card" style="width: 7rem" ><img src="Crud-PRO/upload/'.$row["image"].'" class="card-img-top"  /></div>';
	}
	else
	{
		$image = '';
	}

	$audios = '';
	if($row["audio"] != '')
	{
		$audios = '<audio controls>   
    			   <source src="Crud-PRO/audios/'.$row["audio"].'" type="audio/mp3">
    			   </audio>';

		
	}
	else
	{
		$audios = '';
	}
	$sub_array = array();
	$sub_array[] = $row["dia"];	
	$sub_array[] = $image;
	$sub_array[] = $audios;	
	$sub_array[] = $row["nombre"];
	$sub_array[] = $row["descripcion"];
	$sub_array[] = $row["autor"];
	$sub_array[] = $row["comienzo"];
	$sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update"><i class="fas fa-edit"></i></button><br> <button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></button>' ;
	
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>