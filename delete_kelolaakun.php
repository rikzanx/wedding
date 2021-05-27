<?php
include 'koneksi.php';

$id_user=$_GET['id_user'];

$query=mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id_user' ")
or die(mysqli_error($koneksi));


if($query){
    header("Location: readkelolaakun.php");
}else{
    echo"gagal hapus data";
}
?>