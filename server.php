<?php
include __DIR__ . "/database.php";

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
  }
  // Query error
  else {
    die("query error");
  };
// Close connection

$conn->close();
 ?>
