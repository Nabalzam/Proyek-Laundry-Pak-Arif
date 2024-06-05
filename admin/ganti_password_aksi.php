<?php

    // menghubungkan dengan koneksi
    include '../koneksi.php';

    // menangkap data dari form
    $password_baru = md5($_POST['password_baru']);
    
    // mengupdate data password pada table admin
    mysqli_query($connect, "UPDATE admin SET password = '$password_baru'");

    header("location:ganti_password.php?pesan=oke");

?>