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
"INSERT INTO tbl_product (id, name, image, price) VALUES
(4, 'Beef', '8.jpg', 800.00),
(5, 'Chicken', '9.jpg', 300.00),
(6, 'Fish', '10.jpg', 950.00),
(7, 'Mutton', '11.jpg', 850.00)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>