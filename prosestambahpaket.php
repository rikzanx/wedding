<?php
include 'koneksi.php';

$id_paket=$_POST['id_paket'];
$harga=$_POST['harga'];
$keterangan=$_POST['keterangan'];
$tipe=$_POST['tipe'];
$jumlah_tamu=$_POST['jumlah_tamu'];

$query=mysqli_query($koneksi,"INSERT INTO paket(id_paket, harga, keterangan, tipe, jumlah_tamu) VALUES ('$id_paket', '$harga','$keterangan', '$tipe', '$jumlah_tamu')")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: kelolapaketadmin.php");
}else{
    echo"Gagal Input Data";
}

?>