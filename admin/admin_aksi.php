<?php

    // menghubungkan dengan koneksi 
    include '../koneksi.php';

    // menangkap data yang dikirim dari form
    $nama = $_POST['nama'];
    $password = md5($_POST['password']);

    // input data ke tabel pelanggan
    mysqli_query($connect, "INSERT INTO admin (id, username, password) VALUES ('', '$nama', '$password')");

    header("location:admin.php");
?>