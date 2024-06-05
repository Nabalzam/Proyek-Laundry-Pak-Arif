<?php
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus pelanggan
mysqli_query($connect, "DELETE from pelanggan WHERE pelanggan_id='$id'");

// alihkan halaman ke halaman pelanggan
header("location:pelanggan.php")

?>