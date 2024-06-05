<?php
session_start();
// menghubungkan dengan koneksi
include 'koneksi.php';
// menangkap data yang dikirim dari form
$username = $_GET['username'];
$password = md5($_GET['password']);
// fungsi md5 = untuk enkripsi ke dalam bentuk md5

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($connect, "select * from admin where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
// fungsi mysql_num_rows() digunakan untuk mengetahui berapa banyak jumlah baris hasil pemanggilan fungsi mysqli_query(). Fungsi ini membutuhkan satu argumen, yakni variabel resources hasil dari fungsi mysql_query().
// fungsi mysqli_fetch_array(), fungsi ini digunakan untuk mengubah baris data yang dipilih menjadi pecahan array.
$cek = mysqli_num_rows($data);
// cek jika username dan password yang di input ditemukan, buat session dan alihkan halaman ke halaman admin(folder admin),
// jika tidak, alihkan kembali ke halaman depan sambil mengirim pesan gagal
if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:admin/index.php");
} else {
    header("location:index.php?pesan=gagal");
}
