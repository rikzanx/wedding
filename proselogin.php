<?php
session_start();
$koneksi = mysqli_connect("localhost","root", "", "dbwedding");
$username = $_POST["username"];
$password = $_POST["password"];
$query = mysqli_query($koneksi, "SELECT*FROM user WHERE username='$username' AND password='$password'")
or die( mysqli_error($koneksi));

$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database

if($cek > 0){

    if ($data['hak_akses']=="admin"){
    $_SESSION["username"] = $data['username'];
    $_SESSION['hak_akses'] = "admin";
    $_SESSION["alert"] = "anda berhasil login";
    header("Location:halaman_admin.php");
    }
    else if($data['hak_akses']=="pelanggan"){
	// buat session login dan username
	$_SESSION['username'] = $username;
	$_SESSION['hak_akses'] = "pelanggan";
    $_SESSION["alert"] = "anda berhasil login";
	header("location:halaman_pelanggan.php");
    }
    else{
    $_SESSION["alert"]="email atau password salah";
    header("Location:login.php");
    }
}

else{
	header("location:index.php?pesan=gagal");
}
?>


