<?php include 'header.php'; ?>

<?php

// koneksi database
include '../koneksi.php';
?>
<div class="container">
    <div class="card">
        <div class="card-heading">
            <h4 class="text-center mt-3">Transaksi Laundry Baru</h4>
        </div>
        <div class="card-body d-flex justify-content-center">



            <div class="col-md-8 col-md-offset-2">
                <a href="transaksi.php" class="btn btn-sm btn-info pull-right text-white">Kembali</a>
                <br />
                <br />
                <form method="post" action="transaksi_aksi.php">
                    <div class="form-group">
                        <label>Pelanggan</label>
                        <select class="form-control" name="pelanggan" required="required">
                            <option value="">- Pilih Pelanggan</option>
                            <?php
                            // mengambil data pelanggan dari database
                            $data = mysqli_query($connect, "select * from pelanggan");
                            // mengubah data ke array dan menampilkannya dengan perulangan while 
                            while($d=mysqli_fetch_array($data)) {
                                ?>
                                <option value="<?php echo $d['pelanggan_id']; ?>"><?php echo $d['pelanggan_nama']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Berat (KG)</label>
                        <input type="number" class="form-control" name="berat" placeholder="Masukkan berat cucian" required=" required">
                    </div>

                    <div class="form-group">
                        <label>Tgl. Selesai</label>
                        <input type="date" class="form-control" name="tgl_selesai" required="required">
                    </div>

                    <br />

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Jenis Pakaian</th>
                            <th width="20%">Jumlah</th>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian []"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian[]"></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="form-control" name="jenis_pakaian[]"></td>
                            <td><input type="number" class="form-control" name="jumlah_pakaian[]"></td>
                        </tr>
                    </table>

                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>

            </div>
            
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>