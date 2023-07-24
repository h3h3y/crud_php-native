<?php
include "koneksi.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tampil Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

    <!-- Content -->
    <div class="container py-5">
        <h1 class="text-center mb-5">Data Clients</h1>
        <table class="table table-stripped">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
                <?php
                $no = 0;
                $query = mysqli_query($connn, "SELECT * FROM clients");
                    while($row = mysqli_fetch_array($query)){
                        $no++
                        ?>
                        <tr>
                            <th scope="row"><?php echo $no ?></th>
                            <td><?php echo $row["name"] ?></td>
                            <td><?php echo $row["email"] ?></td>
                            <td><?php echo $row["phone"] ?></td>
                            <td><?php echo $row["address"] ?></td>
                        </tr>
                        <?php
                    }
                ?>
        </tbody>
        </table>
    </div>

    <script>
        window.print();
    </script>

    <!-- End Content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>