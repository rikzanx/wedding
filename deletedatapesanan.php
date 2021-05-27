<?php
include 'koneksi.php';
$id_pesanan=$_GET ['id_pesanan'];

$query=mysqli_query($koneksi, "DELETE FROM datapesanan WHERE id_pesanan='$id_pesanan' ")
or die(mysqli_error($koneksi));

if($query){
    header("Location: listpesananadmin.php");
} else{
    echo "Gagal hapus data";
}
?>