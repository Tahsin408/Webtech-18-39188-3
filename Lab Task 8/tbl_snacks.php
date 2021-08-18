<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = 
"INSERT INTO tbl_snacks (id, name, image, price) VALUES
(1, 'Chocolate', '4.jpg', 500.00),
(2, 'Pringles', '5.jpg', 185.00),
(3, 'Horlicks Biscuits', '6.jpg', 125.00),
(4, 'Wafer', '7.jpg', 250.00)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>