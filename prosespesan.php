<?php
include ("koneksi.php");

$id_pesanan=$_POST['id_pesanan'];
$id_paket=$_POST['paket'];
$tgl_resepsi=$_POST['tgl_resepsi'];
$no_telpon=$_POST['no_telpon'];
$alamat=$_POST['alamat'];
session_start();
$id_user = $_SESSION['id_user'];


$query=mysqli_query($koneksi, "INSERT INTO datapesanan(id_pesanan, id_user, id_paket,tgl_resepsi, no_telpon, alamat, status) 
VALUES ('$id_pesanan', '$id_user', '$id_paket', '$tgl_resepsi', '$no_telpon', '$alamat','Belum Bayar')")
or die(mysqli_error($koneksi));

if($query){
    header("Location: formpembayaran.php?id_pesanan=$id_pesanan");
}else{
    echo"gagal input data";
}
?>