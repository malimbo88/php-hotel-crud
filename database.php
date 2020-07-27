<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbhotel";


// Connect
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn && $conn->connect_error) {
  die($conn->connect_error);
};

?>
