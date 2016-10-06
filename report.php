<?php 

$connection = mysqli_connect('localhost','root','','mmda');

	   $typeAccident = explode(',',$_REQUEST['typeAccident'])[0] . ' ' . explode(',',$_REQUEST['typeAccident'])[1];
	   $message = "";
       $messageContents = explode(',',$_REQUEST['message']);
       for($i=0; $i < count($messageContents);$i++) {
       		$message .= $messageContents[$i] . ' ';
       }
       $report_date = $_REQUEST['dateReported'];
       $ampm = explode(':',$_REQUEST['timeReported'])[0] < 12 ? 'AM' : 'PM';
       $hour = $ampm == 'PM' ? (explode(':',$_REQUEST['timeReported'])[0]%12 > 9 ? explode(':',$_REQUEST['timeReported'])[0]%12 : '0'.explode(':',$_REQUEST['timeReported'])[0]%12) : (explode(':',$_REQUEST['timeReported'])[0]); 
       $report_time = $hour.':'.explode(':',$_REQUEST['timeReported'])[1].':'.explode(':',$_REQUEST['timeReported'])[2] . ' ' . $ampm;
       $lati = $_REQUEST['lati'];
       $longi = $_REQUEST['longi'];
      if($lati != 0 && $longi != 0){
        $result = mysqli_query($connection,"INSERT INTO temporary(message,latitude,longitude,status,report_date,report_time) VALUES('".$message."','".$lati."','".$longi."','".$typeAccident."','".$report_date."','".$report_time."')");  
      }
      mysqli_close($connection);
?>