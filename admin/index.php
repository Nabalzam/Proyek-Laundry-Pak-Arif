<?php include 'header.php'; ?>

<?php
// koneksi database
include '../koneksi.php';
?>

<div class="container">
    <div class="alert alert-info text-center">
        <h4 style="margin-bottom: 0px"><b>Selamat datang</b> di sistem informasi laundry,
            <b><?php echo $_SESSION['username'] ?></b>!
        </h4>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <h4>Dashboard</h4>
        </div>
        <div class="panel-body">

            <div class="row">
                <div class="col-md-3">
                    <div class="card card-info p-3">
                        <div class="">
                            <h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" fill="currentColor"
                                    class="bi bi-person-fill mb-2" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />

                                </svg><span class="float-end">
                                    <?php
                                    $pelanggan = mysqli_query($connect, "select * from pelanggan");
                                    echo mysqli_num_rows($pelanggan);
                                    ?>
                                </span>
                            </h1>
                            Jumlah Pelanggan
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-info p-3">
                        <div class="panel-heading">
                            <h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                                    class="bi bi-file-arrow-up-fill mb-2" viewBox="0 0 16 16">
                                    <path
                                        d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M7.5 6.707 6.354 7.854a.5.5 0 1 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0z" />

                                </svg><span class="float-end">
                                    <?php
                                    $proses = mysqli_query($connect, "select * from transaksi where transaksi_status='0'");
                                    echo mysqli_num_rows($proses);
                                    ?>
                                </span>
                            </h1>
                            Jumlah Cucian Di Proses
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-info p-3">
                        <div class="panel-heading">
                            <h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                                    class="bi bi-door-closed-fill mb-2" viewBox="0 0 16 16">
                                    <path
                                        d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />

                                </svg><span class="float-end">
                                    <?php
                                    $proses = mysqli_query($connect, "select * from transaksi where transaksi_status='1'");
                                    echo mysqli_num_rows($proses);
                                    ?>
                                </span>
                            </h1>
                            Jumlah Cucian Dicuci
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card card-info p-3">
                        <div class="panel-heading">
                            <h1>
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor"
                                    class="bi bi-check-all mb-2" viewBox="0 0 16 16">
                                    <path
                                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486z" />
                                </svg>
                                <span class="float-end">
                                    <?php
                                    $proses = mysqli_query($connect, "select * from transaksi where transaksi_status='2'");
                                    echo mysqli_num_rows($proses);
                                    ?>
                                </span>
                            </h1>
                            Jumlah Cucian Selesai
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="card mt-3 p-3">
        <div class="card-heading">
            <h4 class="mb-4 mt-2">Riwayat Transaksi Terakhir</h4>
        </div>
        <div class="">
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Invoice</th>
                    <th>Tanggal</th>
                    <th>Pelanggan</th>
                    <th>Berat (Kg)</th>
                    <th>Tgl. Selesai</th>
                    <th>Harga</th>
                    <th>Status</th>
                </tr>

                <?php
                // mengambil data pelanggan dari database
                $data = mysqli_query($connect, "select * from pelanggan, transaksi where transaksi_pelanggan=pelanggan_id order by transaksi_id desc limit 7");
                $no = 1;
                // mengubah data ke array dan menampilkannya dengan perulangan while 
                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td> INVOICE-<?php echo $d['transaksi_id']; ?></td>
                        <td><?php echo $d['transaksi_tgl']; ?></td>
                        <td><?php echo $d['pelanggan_nama']; ?></td>
                        <td><?php echo $d['transaksi_berat']; ?></td>
                        <td><?php echo $d['transaksi_tgl_selesai']; ?></td>
                        <td><?php echo "Rp. " . number_format($d['transaksi_harga']) . ",-"; ?></td>
                        <td>
                            <?php
                            if ($d['transaksi_status'] == "0") {
                                echo "<div class='label text-warning'>PROSES</div>";
                            } else if ($d['transaksi_status'] == "1") {
                                echo "<div class='label text-info'>DICUCI</div>";
                            } else if ($d['transaksi_status'] == "2") {
                                echo "<div class='label text-success'>SELESAI</div>";
                            }
                            ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

<div class="container mt-4 mb-5">
    <div class="shadow-sm p-2 card">
        <div class="card-heading">
            <h4 class="mx-3 mt-3">List Admin</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="1%">No</th>
                    <th>Nama</th>
                </tr>
                <?php
                // koneksi database
                include '../koneksi.php';
                $data = mysqli_query($connect, 'select * from admin');
                $no = 1;
                while ($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $d['username']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>