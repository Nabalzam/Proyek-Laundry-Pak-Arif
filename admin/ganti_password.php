<?php include 'header.php'; ?>
<div class="container d-flex justify-content-center mt-5"><br /><br /><br />
    <div class="col-md-5 col-md-offset-3">

        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "oke") {
                echo "<div class='alert alert-success'>Password anda berhasil diganti.</div>";
            }
        }
        ?>

        <div class="card p-2">
            <div class="card-heading">

            </div>
            <div class="card-body">
                <h4>Ganti Password</h4>
                <form method="post" action="ganti_password_aksi.php">
                    <div class="form-group">
                        <label>Masukkan Password Baru</label>
                        <input type="password" class="form-control mt-3" name="password_baru"
                            placeholder="Masukan Password Baru">
                    </div>
                    <br />
                    <input type="submit" class="btn btn-primary" value="Ganti Password">
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>