<?php 

$connection = mysqli_connect('localhost','root','','mmda');

$querry = "SELECT * FROM temporary";
$result = mysqli_query($connection,$querry);
$temporary = array();
while($row = mysqli_fetch_assoc($result)){
	array_push($temporary,array('id' => $row['id'],'message'=>$row['message'],'typeAccident'=>$row['status'],'lati'=>$row['latitude'],'longi'=>$row['longitude'],'timeReport'=>$row['report_time'],'dateReport'=>$row['report_date']));
}
echo json_encode($temporary);
?>