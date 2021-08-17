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
"INSERT INTO tbl_frozenfood (id, name, image, price) VALUES
(17, 'Beef Samosa', '17.jpg', 300.00),
(18, 'Chicken Samosa', '18.jpg', 250.00),
(19, 'Chicken Meat Ball', '19.jfif', 450.00),
(20, 'Chicken Nugget', '20.jpg', 350.00),
(21, 'Paratha', '21.jpg', 80.00)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>