<?php
include 'header.php';
?>

<div class="container d-flex justify-content-center mt-5">
    <br />
    <div class="col-md-5 col-md-offset-3">

        <div class="card">
            <div class="card-heading">
                <h4 class="ms-3 mt-3">Pengaturan Harga Laundry</h4>
            </div>
            <div class="card-body">

                <?php
                // menghubungkan koneksi
                include '../koneksi.php';

                // mengambil data haraga per kilo dari tabel harga
                $data = mysqli_query($connect, "select harga_per_kilo from harga");
                while ($d = mysqli_fetch_array($data)) {
                    ?>

                    <form method="post" action="harga_update.php">
                        <div class="form-group">
                            <label class="mb-1">Harga per kilo</label>
                            <input type="number" class="form-control" name="harga" step="500"
                                value="<?php echo $d['harga_per_kilo']; ?>">
                        </div>

                        <br />

                        <input type="submit" class="btn btn-primary" value="Ubah Harga">
                    </form>

                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>