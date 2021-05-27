<?php 
// mengaktifkan session php
session_start();
unset($_SESSION["username"]);
$_SESSION["alert"] = "Anda berhasil Logout";
// menghapus semua session
session_destroy();
 
// mengalihkan halaman ke halaman login
header("location:index.php");
?>