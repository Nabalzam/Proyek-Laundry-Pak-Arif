<?php
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus transaksi
mysqli_query($connect, "DELETE from transaksi WHERE transaksi_id='$id'");

// menghapus data pakaian dalam transaksi ini
mysqli_query($connect,"DELETE from pakaian WHERE pakaian_transaksi='$id'");

// alihkan halaman ke halaman transaksi 
header("location:transaksi.php");
?>