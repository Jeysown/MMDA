<?php

$connection = mysqli_connect('localhost','root','','mmda');
$idReport = $_REQUEST['idReport'];

$deleteReport = mysqli_query($connection,"DELETE FROM temporary WHERE id = '".$idReport."'");

?>