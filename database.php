<?php
include __DIR__ . "/env.php";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn && $conn->connect_error) {
  die("Connection failed. " . $conn->connect_error);
};

// Create Sql query
$sql = "SELECT * FROM `stanze`";
$result = $conn->query($sql);

// Query result > 0
if ($result && $result->num_rows > 0) {

  // Array rows
  $array_rooms = [];

  // Output result of each row
  while ($row = $result->fetch_assoc()) {
    $array_rooms[] = $row;
  }
  }
  // Query result = 0
  elseif ($result) {
    $array_rooms = [];
    echo "0 results";
  }
  // Query error
  else {
    die("query error");
  };
// Close connection

$conn->close();
?>
