  <!-- main_show -->
  <main>

    <!-- table stanze -->
    <table>

    <!-- head table  -->
    <thead>
      <tr>
        <th>Id</th>
        <th>Numero Stanza</th>
        <th>Piano</th>
        <th>Letti</th>
        <th>Data Creazione</th>
      </tr>
    </thead>
    <!-- head table -->

    <?php if(!empty($this_room)) { ?>

      <tbody>

          <!-- single room <?php $this_room["room_number"]; ?> -->
          <tr>
            <td><?php echo $this_room["id"]; ?></td>
            <td><?php echo $this_room["room_number"]; ?></td>
            <td><?php echo $this_room["floor"]; ?></td>
            <td><?php echo $this_room["beds"]; ?></td>
            <td><?php echo $this_room["created_at"]; ?></td>
          </tr>
          <!-- end single room -->

      </tbody>
      <!-- body table -->

    <?php } ?>
    <!-- body table -->

  </table>
  <!-- table stanze -->

  </main>
  <!-- end main -->

</body>
<!-- end body -->

</html>
