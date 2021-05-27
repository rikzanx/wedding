<?php
include 'koneksi.php';
$id_pembayaran=$_GET ['id_pembayaran'];

$query=mysqli_query($koneksi, "DELETE FROM pembayaran WHERE id_pembayaran='$id_pembayaran' ")
or die(mysqli_error($koneksi));

if($query){
    header("Location: listtransaksiadmin.php");
} else{
    echo "Gagal hapus data";
}
?>