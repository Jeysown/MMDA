<?php

$connection = mysqli_connect('localhost','root','','mmda');

$userName = $_REQUEST['userName'];
$passWord = md5($_REQUEST['passWord']);

$validate = "SELECT * FROM users WHERE username = '".$userName."' AND password = '".$passWord."'";
$result = mysqli_query($connection,$validate);
$output = array();
$row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result) == 1){
	array_push($output,array('status'=>'1','name'=>($row['fName']. ' ' .substr(strtoupper($row['mName']),0,1).'. '.$row['lName'])));
}
else{
	array_push($output,array('status'=>'0','name'=>'wala'));
}
echo json_encode($output);

?>