<?php 
    include_once "../assets/lib/conn.php";

    $id = $_GET['id'];
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
                    <a class="nav-link active" aria-current="page" href="?hal=admin">Admin</a>
                    <a class="nav-link" href="menu.php">Paket Menu</a>
                    <a class="nav-link" href="">Reservasi</a>
                    <a class="nav-link" href="tempat.php">Tempat</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-center" style="margin-top:25px;">Data Edit Tempat</h2>

        <?php 
        
        $sql = "SELECT * FROM tempat WHERE Kd_Tempat='$id'";
        
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()){

        ?>
        <form action="../assets/lib/tempat/tempat_update.php" method="post">
            <div class="mb-3">
                <input type="hidden" class="form-control" name="Kd_Tempat" id="formGroupExampleInput"
                    placeholder="Example input placeholder" value="<?=$row['Kd_Tempat']?>">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Lokasi Ruangan</label>
                <input type="text" class="form-control" name="Lokasi_Ruangan" id="formGroupExampleInput2"
                    placeholder="Another input placeholder" value="<?=$row['Lokasi_Ruangan']?>">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Jumlah Kursi</label>
                <input type="text" class="form-control" name="Jumlah_Kursi" id="formGroupExampleInput2"
                    placeholder="Another input placeholder" value="<?=$row['Jumlah_Kursi']?>">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
        <?php } ?> 
    </div>
</body>

</html>