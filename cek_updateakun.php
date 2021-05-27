<?php
include 'koneksi.php';
$idlama=$_GET['id_user'];
$id_user=$_POST['id_user'];
$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = $_POST['password'];
$hak_akses = $_POST['hak_akses'];
$email = $_POST["email"];

$query=mysqli_query($koneksi, "UPDATE user 
SET id_user='$id_user', nama_lengkap='$nama_lengkap', username='$username', password='$password', hak_akses='$hak_akses', email='$email' 
WHERE id_user='$idlama'")
or die(mysqli_error($koneksi));

if($query){
    header("Location:readkelolaakun.php");
}else{
    echo"gagal update data";
}
?>