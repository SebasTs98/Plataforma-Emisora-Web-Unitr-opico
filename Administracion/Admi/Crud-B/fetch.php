<?php
include('db.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM banner ";
if(isset($_POST["search"]["value"]))
{

	$query .= 'WHERE nombre LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR descripcion LIKE "%'.$_POST["search"]["value"].'%" ';

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
	if($row["imagen"] != '')
	{
		$image = '<div  class="card" style="width: 7rem" ><img src="Crud-B/upload/'.$row["imagen"].'" class="card-img-top"  /></div>';
	}
	else
	{
		$image = '';
	}

	
	$sub_array = array();
	$sub_array[] = $row["nombre"];
	$sub_array[] = '<center>'.$image.'</center>';
	$sub_array[] = $row["descripcion"];
	$sub_array[] = '<center>
	<button type="button" name="update" id="'.$row["id"].'" class="btn btn-warning btn-xs update"><i class="fas fa-edit"></i></button> </center> ' ;
	
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