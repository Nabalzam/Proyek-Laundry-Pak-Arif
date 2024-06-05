<?php include 'header.php'; ?>

<div class="container">
    <br />
    <br />
    <br />
    <div class="col-md-5 col-md-offset-3">

        <div class="panel">
            <div class="panel-heading">
                <h4>Edit Pelanggan</h4>
            </div>
            <div class="panel-body">

                <?php
                // menghubungkan koneksi
                include '../koneksi.php';

                // menangkap id yang dikirim melalui url
                $id = $_GET['id'];

                // mengambil data pelanggan yang ber-id di atas dari tabel pelanggan
                $data = mysqli_query($connect, "select * from pelanggan where pelanggan_id='$id'");
                while ($d = mysqli_fetch_array($data)) {
                    ?>

                    <form method="post" action="pelanggan_update.php">
                        <div class="form-group">
                            <label>Nama</label>
                            <!-- form id pelanggan yang di edit, untuk di kirim ke file aksi -->
                            <input type="hidden" name="pelanggan_id" 
                                value="<?php echo $d['pelanggan_id']; ?>">

                            <input type="text" class="form-control" name="pelanggan_nama" placeholder="Masukkan Nama Baru" 
                                value="<?php echo $d['pelanggan_nama'] ?>">

                        </div>

                        <div class="form-group">
                            <label>HP</label>
                            <input type="number" class="form-control" name="pelanggan_hp" placeholder="Masukkan no.hp"
                                value="<?php echo $d['pelanggan_hp']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="pelanggan_alamat" placeholder="Masukkan alamat .." 
                                value="<?php echo $d['pelanggan_alamat']; ?>">
                        </div>

                        <br />

                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </form>

                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>