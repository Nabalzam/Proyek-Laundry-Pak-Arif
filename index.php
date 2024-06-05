<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> -->
    <title>Form Login</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header mb-0">
                        <h5 class="text-center mt-2">Sistem Informasi Laundry<br />SMKN 7 BALEENDAH</h5>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan'] == "gagal") {
                                echo "<div class='alert alert-danger'>Login Gagal! Username dan Password Salah!</div>";
                            } else if ($_GET['pesan'] == "logout") {
                                echo "<div class='alert alert-info'>Anda Telah Berhasil Logout</div>";
                            } else if ($_GET['pesan'] == "belum_login") {
                                echo "<div class='alert alert-danger'>Anda Harus Login Untuk Mengakses Halaman Admin</div>";
                            }
                        }
                        ?>
                        <form action="login.php" method="get">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="username" class="form-control" id="username" aria-describedly="emailHelp"
                                    name="username" placeholder="Masukkan Username">
                            </div>
                            <div class="mb-3">
                                <label for="exampleIputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                    placeholder="Masukkan Password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Log In">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>