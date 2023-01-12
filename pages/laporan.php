<?php 
    include_once "../assets/lib/conn.php";
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
                    <a class="nav-link active" aria-current="page" href="index.php">Admin</a>
                    <a class="nav-link" href="menu.php">Paket Menu</a>
                    <a class="nav-link" href="pages/laporan.php">Laporan Reservasi</a>
                    <a class="nav-link" href="tempat.php">Tempat</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-center" style="margin-top:25px;">Laporan Reservasi</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Reservasi</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">Tanggal Reservasi</th>
                    <th scope="col">Waktu Reservasi</th>
                    <th scope="col">Jumlah Tamu</th>
                    <th scope="col">Jumlah Pesanan</th>
                    <th scope="col">Nama Paket Menu</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Tempat</th>
                    <th scope="col">Catatan</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM reservasi a, admin b, paket_menu c, tempat d WHERE a.Kd_Admin = b.Kd_Admin AND a.Kd_Paket_Menu = c.Kd_Paket_Menu AND a.Kd_Tempat=d.Kd_Tempat";

                    $result = $conn->query($sql);
                    $no = 1;
                    while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <th scope="row"><?=$no++?></th>
                    <td><?=$row['Kd_Reservasi']?></td>
                    <td><?=$row['Nm_Konsumen']?></td>
                    <?php
                        $date = date_create($row['Tgl_Reservasi']);
                        $tglResv_format = date_format($date, "d/m/Y");
                        echo "<td>$tglResv_format</td>";
                    ?>
                    <td><?=$row['Jam_Datang']?></td>
                    <td><?=$row['Total_Tamu']?></td>
                    <td><?=$row['Total_Pesanan_Paket']?></td>
                    <td><?=$row['Nm_Paket_Menu']?></td>
                    <td>Rp. <?=$row['Harga_Paket']*$row['Total_Pesanan_Paket']?></td>
                    <td><?=$row['Lokasi_Ruangan']?></td>
                    <td><?=$row['Catatan_Konsumen']?></td>
                </tr>
                <?php } ?> 
            </tbody>
        </table>
    </div>

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>