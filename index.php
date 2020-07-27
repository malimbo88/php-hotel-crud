<?php include __DIR__ . "/database.php" ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-hotel-crud</title>

    <!-- Link Html -->
    <link rel="stylesheet" href="dist/style.css">
    <!-- Link Html -->

  </head>
  <body>

    <!-- header -->
    <header>
      <h1>Boolean Hotel</h1>
    </header>
    <!-- end header -->

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
