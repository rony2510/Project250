<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hall";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $emai=$_POST['email'];
$id=$_POST['id'];

// sql to delete a record
$sql = "DELETE FROM student WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  // sleep(2);
  header('location:deletestudent.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>