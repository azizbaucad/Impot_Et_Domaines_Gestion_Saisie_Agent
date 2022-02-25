<?php

//fetch.php

include('../Model/connection.php');

$column = array('Centre', 'N Agent', 'ID Agent', 'Intitulé Marché');

$query = "SELECT * FROM d_br";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE centre LIKE "%'.$_POST['search']['value'].'%" 
 OR agent LIKE "%'.$_POST['search']['value'].'%" 
 OR id_agent LIKE "%'.$_POST['search']['value'].'%" 
 OR im LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY id_d_br DESC ';
}

$query1 = '';

if($_POST['length'] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['centre'];
 $sub_array[] = $row['agent'];
 $sub_array[] = $row['id_agent'];
 $sub_array[] = $row['im'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM d_br";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST['draw']),
 'recordsTotal'  => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data
);

echo json_encode($output);

?>