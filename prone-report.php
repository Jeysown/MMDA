
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

//all
//safe
$sql = "SELECT * FROM prone" ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
		 $j=0;
     while($row = $result->fetch_assoc()) {
				 $all[$j]=array($row["latitude"],$row["longitude"],$row["location"]);
				 $j++;
     }
}

$conn->close();
?>
