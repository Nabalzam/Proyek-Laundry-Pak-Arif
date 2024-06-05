<?php

    // menghubungkan dengan koneksi 
    include '../koneksi.php';

    // menangkap data yang dikirim dari form
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];

    // input data ke tabel pelanggan
    mysqli_query($connect, "INSERT INTO pelanggan (pelanggan_id, pelanggan_nama, pelanggan_hp, pelanggan_alamat) VALUES ('', '$nama', '$hp', '$alamat')");

    header("location:pelanggan.php");
?>