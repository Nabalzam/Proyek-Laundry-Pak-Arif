<?php include 'header.php'; ?>

<div class="container d-flex justify-content-center mt-5">
    <br />
    <br />
    <br />
    <div class="col-md-5 col-md-offset-3">

        <div class="card">
            <div class="card-heading">
                <h4 class="ms-3 mt-3">Tambah Pelanggan Baru</h4>
            </div>
            <div class="card-body">

                <form method="post" action="pelanggan_aksi.php">
                    <div class="form-group">
                        <label class="mb-1">Nama</label>
                        <input type="text" class="form-control mb-2" name="nama" placeholder="Masukkan nama ">
                    </div>

                    <div class="form-group">
                        <label class="mb-1">HP</label>
                        <input type="number" class="form-control mb-2" name="hp" placeholder="Masukkan no. hp">
                    </div>
                    
                    <div class="form-group">
                        <label class="mb-1">Alamat</label>
                        <input type="text" class="form-control mb-2" name="alamat" placeholder="Masukkan alamat">
                    </div>
                    <br />
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="pelanggan.php" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>