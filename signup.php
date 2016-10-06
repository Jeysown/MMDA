<?php

$connection = mysqli_connect('localhost','root','','mmda');

$userName = $_REQUEST['userName'];
$passWord = md5($_REQUEST['passWord']);
$fName = ucfirst($_REQUEST['firstName']);
$lName = ucfirst($_REQUEST['lastName']);
$mName = ucfirst($_REQUEST['middleName']);
$emailAddress = ($_REQUEST['emailAdd']);
$plateNumber = strtoupper(explode(",",$_REQUEST['plateNum'])[0]).' '.explode(",",$_REQUEST['plateNum'])[1];


$query = "INSERT INTO users(username,password,fName,lName,mName,emailAddress,plateNumber) VALUES('".$userName."','".$passWord."','".$fName."','".$lName."','".$mName."','".$emailAddress."','".$plateNumber."')";

mysqli_query($connection,$query);
?>