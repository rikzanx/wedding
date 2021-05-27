<?php
include 'koneksi.php';
$idlama=$_GET['id_pesanan'];
$id_pesanan=$_POST['id_pesanan'];
$id_paket = $_POST['paket'];
$tgl_resepsi = $_POST['tgl_resepsi'];
$no_telpon = $_POST['no_telpon'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];


$query=mysqli_query($koneksi, "UPDATE datapesanan 
SET id_pesanan='$id_pesanan', id_paket='$id_paket', tgl_resepsi='$tgl_resepsi', no_telpon='$no_telpon', alamat='$alamat' , status='$status' 
WHERE id_pesanan='$idlama'")
or die(mysqli_error($koneksi));

if($query){
    header("Location:listpesananadmin.php");
}else{
    echo"gagal update data";
}
?>