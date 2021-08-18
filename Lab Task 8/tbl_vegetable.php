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
"INSERT INTO tbl_vegetable (id, name, image, price) VALUES
(12, 'Capsicum', '12.jpg', 100.00),
(13, 'Green Chilli', '13.jpg', 50.00),
(14, 'Onion', '14.jpg', 90.00),
(15, 'Potato', '15.jpg', 40.00),
(16, 'Tomato', '16.jpg', 50.00)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>