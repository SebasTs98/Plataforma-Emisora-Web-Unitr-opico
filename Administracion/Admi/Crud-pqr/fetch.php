<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM peticiones ";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE nombre LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR correo LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR motivo LIKE "%'.$_POST["search"]["value"].'%" ';
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

	$sub_array = array();

	$sub_array[] = $row["nombre"];
	$sub_array[] = $row["correo"];
	$sub_array[] = $row["motivo"];
	$sub_array[] = $row["mensaje"];
	$sub_array[] = '<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update"><i class="fa fa-reply" aria-hidden="true"></i></button>     <button type="button" name="delete" id="'.$row["id"].'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></button>';
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