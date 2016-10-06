<?php

$connection = mysqli_connect('localhost','root','','mmda');
$idReport = $_REQUEST['idReport'];
$querry = "SELECT * FROM temporary WHERE id = '".$idReport."'";
$result = mysqli_query($connection,$querry);

while($row = mysqli_fetch_assoc($result)){
	$insert = mysqli_query($connection,"INSERT INTO report(message,latitude,longitude,status,report_date,report_time) VALUES('".$row['message']."','".$row['latitude']."','".$row['longitude']."','".$row['status']."','".$row['report_date']."','".$row['report_time']."')");
	$deleteReport = mysqli_query($connection,"DELETE FROM temporary WHERE id = '".$idReport."'");
}
?>