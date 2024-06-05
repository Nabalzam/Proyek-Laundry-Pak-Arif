<?php
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$harga_per_kilo = $_POST['harga'];

// update data
mysqli_query($connect, "UPDATE harga SET harga_per_kilo = '$harga_per_kilo'");

// mengalihkan halaman kembali ke halaman pelanggan
header("location:harga.php");  


?>