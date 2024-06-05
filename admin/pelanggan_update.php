<?php
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari from
$id = $_POST['pelanggan_id'];
$nama = $_POST['pelanggan_nama'];
$hp = $_POST['pelanggan_hp'];
$alamat = $_POST['pelanggan_alamat'];

// update data
mysqli_query($connect, "UPDATE pelanggan SET pelanggan_nama='$nama', pelanggan_hp='$hp', pelanggan_alamat='$alamat' WHERE pelanggan_id=$id");

// mengalihkan halaman kembali ke halaman pelanggan
header("location:pelanggan.php");  


?>