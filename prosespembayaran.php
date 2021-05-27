<?php
include ("koneksi.php");

$id_pesanan=$_POST['id_pesanan'];
$total_pembayaran=$_POST['total_pembayaran'];
$bank=$_POST['bank'];
echo "<pre>";
print_r($_FILES);
echo "</pre>";

// ambil data foto bukti pembayaran
$namaFile = $_FILES['bukti_pembayaran']['name'];
$namaSementara = $_FILES['bukti_pembayaran']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "bukti-pembayaran/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
	    $query=mysqli_query($koneksi, "INSERT INTO pembayaran (id_pembayaran, id_pesanan, total_pembayaran, bank, bukti_pembayaran) 
	VALUES ('', '$id_pesanan', '$total_pembayaran', '$bank', '$namaFile')")
	or die(mysqli_error($koneksi));

	if($query){
		$query=mysqli_query($koneksi, "UPDATE datapesanan set status = 'Mohon tunggu konfirmasi' where id_pesanan = '$id_pesanan'")
	or die(mysqli_error($koneksi));
	    header("Location: output.php");
	}else{
	    echo"gagal input data";
	}
} else {
    echo "Upload Gagal!";
}
?>