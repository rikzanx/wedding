<?php
include 'koneksi.php';
$id_paket=$_GET ['id_paket'];

$query=mysqli_query($koneksi, "DELETE FROM paket WHERE id_paket='$id_paket' ")
or die(mysqli_error($koneksi));

if($query){
    header("Location: kelolapaketadmin.php");
} else{
    echo "Gagal hapus data";
}
?>