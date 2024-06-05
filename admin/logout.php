<?php
// mengaktifkan session
session_start();
$_SESSION['session_username'] = "";
$_SESSION['session_password'] = "";

// menghapus semua session yang ada
session_destroy();
$cookie_name = "cookie_username";
$cookie_value = "";
$cookie_time = time() - (60 * 60);
setcookie($cookie_name, $cookie_value, $cookie_time, "/");

session_destroy();
$cookie_name = "cookie_password";
$cookie_value = "";
$cookie_time = time() - (60 * 60);
setcookie($cookie_name, $cookie_value, $cookie_time, "/");

// mengalihkan halaman kembali ke halaman login sambil mengirimkan pesan logout melalui url
header("location:../index.php?pesan=logout");
?>