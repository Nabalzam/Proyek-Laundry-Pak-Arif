<?php include 'header.php'; ?>

<div class="container d-flex justify-content-center mt-5">
    <br />
    <br />
    <br />
    <div class="col-md-5 col-md-offset-3">

        <div class="card">
            <div class="card-heading">
                <h4 class="ms-3 mt-3">Tambah Admin</h4>
            </div>
            <div class="card-body">

                <form method="post" action="admin_aksi.php">
                    <div class="form-group">
                        <label class="mb-1">Nama</label>
                        <input type="text" class="form-control mb-2" name="nama" placeholder="Masukkan nama ">
                    </div>

                    <div class="form-group">
                        <label class="mb-1">Password</label>
                        <input type="password" class="form-control mb-2" name="password" placeholder="Masukkan Password">
                    </div>
                    
                    <br />
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <a href="admin.php" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>