<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
//menyeleksi apakah username dan passwor kosong apa tidak
if($_POST['username'] != "" && $_POST['password']!=""){
	// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['hak_akses']=="admin"){
 
		// buat session login dan username
		$_SESSION['id_user'] = $data['id_user'];
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = "admin";
		$_SESSION["alert"] = "anda berhasil login";
		// alihkan ke halaman dashboard admin
		header("location:halaman_admin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['hak_akses']=="pelanggan"){
		// buat session login dan username
		$_SESSION['id_user'] = $data['id_user'];
		$_SESSION['username'] = $username;
		$_SESSION['hak_akses'] = "pelanggan";
		$_SESSION["alert"] = "anda berhasil login";
		// alihkan ke halaman dashboard pegawai
		header("location:halaman_pelanggan.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
    $_SESSION["alert"]="Username atau password salah";
	header("location:login.php?pesan=gagal");
}
}else{
	$_SESSION["alert"]="Silahkan isi username dan password";
	header("location:login.php?pesan=gagal");
}
 
?>