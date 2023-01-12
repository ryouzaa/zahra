<?php 
    include_once "assets/lib/conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DASHBOARD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="">Admin</a>
                    <a class="nav-link" href="menu.php">Paket Menu</a>
                    <a class="nav-link" href="pages/laporan.php">Laporan Reservasi</a>
                    <a class="nav-link" href="tempat.php">Tempat</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-center" style="margin-top:25px;">Data Paket Menu</h2>
<a href="pages/add_admin.php" class="btn btn-primary">ADD DATA</a>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th scope="col">Kode Paket Menu</th>
                    <th scope="col">Nama Menu</th>
                    <th scope="col">Harga Paket</th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                $sql = "SELECT * FROM paket_menu";

                $result = $conn->query($sql);
                $no = 1;

                while($row = $result->fetch_assoc()){
                
                ?>
                <tr>
                    <th scope="row"><?=$no++?></th>
                    <td><?=$row['Kd_Paket_Menu']?></td>
                    <td><?=$row['Nm_Paket_Menu']?></td>
                    <td><?=$row['Harga_Paket']?></td>
                    <td><a href="pages/edit_menu.php?id=<?=$row['Kd_Paket_Menu']?>">EDIT</a> | <a href="assets/lib/menu/menu_delete.php?id=<?=$row['Kd_Paket_Menu']?>">DELETE</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>