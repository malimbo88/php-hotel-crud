<?php include __DIR__ . "/database.php" ?>
<?php include __DIR__ . "/partials_php/_head.php" ?>
<?php include __DIR__ . "/partials_php/_header.php" ?>



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
</html>
