
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

   $remove = "DELETE FROM temporary where id = '".$id."' ";
   $result2 = $conn->query($remove);
$conn->close();

header('Location:index.php');
?>
