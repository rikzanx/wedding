<?php
include 'koneksi.php';

$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = $_POST['password'];
$hak_akses = $_POST['hak_akses'];
$email = $_POST["email"];

$query=mysqli_query($koneksi, "INSERT INTO user(nama_lengkap, username, password,hak_akses, email )
VALUES ('$nama_lengkap', '$username', '$password', '$hak_akses', '$email')")
or die(mysqli_error($koneksi));

if($query){
    header("Location: readkelolaakun.php");
}else{
    echo"gagal input data";
}

?>

