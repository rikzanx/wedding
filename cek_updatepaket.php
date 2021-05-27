<?php
include 'koneksi.php';
$idlama=$_GET['id_paket'];
$id_paket=$_POST['id_paket'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];
$tipe = $_POST['tipe'];
$jumlah_tamu = $_POST['jumlah_tamu'];

$query=mysqli_query($koneksi, "UPDATE paket 
SET id_paket='$id_paket', harga='$harga', keterangan='$keterangan', tipe='$tipe', jumlah_tamu='$jumlah_tamu' 
WHERE id_paket='$idlama'")
or die(mysqli_error($koneksi));

if($query){
    header("Location:kelolapaketadmin.php");
}else{
    echo"gagal update data";
}
?>