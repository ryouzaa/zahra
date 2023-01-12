
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
                    <a class="nav-link" href="#">Reservasi</a>
                    <a class="nav-link" href="tempat.php">Tempat</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-center" style="margin-top:25px;">Edit Data Admin</h2>
        
        <form action="../assets/lib/admin/admin_add.php" method="post">
            
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Nama Admin</label>
                <input type="text" class="form-control" name="Nm_Admin" id="formGroupExampleInput2"
                    placeholder="Another input placeholder" >
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">No Telepon</label>
                <input type="text" class="form-control" name="No_Tlp" id="formGroupExampleInput2"
                    placeholder="Masukan No" >
            </div>

            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Email</label>
                <input type="text" class="form-control" name="Email" id="formGroupExampleInput2"
                    placeholder="Nama Email">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>