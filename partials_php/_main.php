<!-- _main.php -->
<?php include __DIR__ . "/../database.php" ?>

<!-- main -->
<main>

  <!-- table stanze -->
  <table>

    <!-- head table  -->
    <thead>
      <tr>
        <th>Id</th>
        <th>Numero Stanza</th>
        <th>Piano</th>
        <th>Room info</th>
      </tr>
    </thead>
    <!-- head table -->

    <!-- body table -->
    <tbody>

      <?php foreach ($array_rooms as $single_room) { ?>

        <!-- single room -->
        <tr>
          <td><?php echo $single_room["id"]; ?></td>
          <td><?php echo $single_room["room_number"]; ?></td>
          <td><?php echo $single_room["floor"]; ?></td>

          <!-- View -->
          <td>
            <a href="<?php echo $base_path . "/show/index_show.php" . "?id=" . $single_room["id"]; ?>">View Room</a>
          </td>
          <!-- end View -->

        </tr>
        <!-- end single room -->

      <?php }; ?>

    </tbody>
    <!-- body table -->

  </table>
  <!-- table stanze -->

</main>
<!-- end main -->

</body>
<!-- end body -->

</html>
