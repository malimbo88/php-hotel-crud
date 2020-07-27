<?php
  include __DIR__ . "/../database.php";

  $room_id = $_GET["id"];
  // Create Sql query
  $sql = "SELECT * FROM `stanze` WHERE `id` = $room_id";
  $result = $conn->query($sql);

  // Query result > 0
  if ($result && $result->num_rows > 0) {

    // Output result (only one result)
    $this_room = $result->fetch_assoc();
    }
    // Query result = 0
    elseif ($result) {
      $this_room = [];
      die("La stanza non esiste");
    }
    // Query error
    else {
      die("query error");
    };
  // Close connection

  $conn->close();
 ?>
