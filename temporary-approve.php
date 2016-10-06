
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mmda";
$all = array();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
$id= $_POST['temp_id'];
//all
//safe
$sql = "SELECT * FROM temporary where id = '".$id."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
		 $j=0;
     while($row = $result->fetch_assoc()) {
          $approve = "INSERT INTO report(status,report_date,report_time,latitude,longitude,message) VALUES ('".$row['status']."','".$row['report_date']."','".$row['report_time']."','".$row['latitude']."','".$row['longitude']."','".$row['message']."')";
				 $result1 = $conn->query($approve);
				 $j++;
     }
}



   $remove = "DELETE FROM temporary where id = '".$id."' ";
   $result2 = $conn->query($remove);
$conn->close();

header('Location:index.php');
?>
