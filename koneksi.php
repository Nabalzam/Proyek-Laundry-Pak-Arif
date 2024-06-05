<?php

// koneksi

$host_db="localhost";
$user_db="root";
$pass_db="";
$name_db="laundry_nabhan";

$connect = mysqli_connect($host_db, $user_db, $pass_db, $name_db);

// check connection
if (mysqli_connect_errno()) {
    echo "Koneksi gagal : " . mysqli_connect_error();
}