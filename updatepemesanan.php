<html>
<head>
	<title>Wedding Organizer</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/fonts.css">
</head>
<body>

	<!------CSS----->
	<style type="text/css">
	body{
		background-image : url("foto/jez-timms-7bVMdNYzH_8-unsplash.jpg");
		
	}
	#navbar {
		background: #D2B48C;
	}
	.card {
        margin: 35px ;
        width: 400px;
        padding:20px;
        border: 0px solid #ccc;
		box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
		color: black;
		background: white;

	}
	
	</style>
	<!------Akhir CSS----->


	
	<!--------Navbar----->
	<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #D2B48C;">
  <div class="container-fluid">
    <a class="navbar-brand font-Dishonorable Mention" href="#">Wedding Organizer</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>  
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto text-center">
        <li class="nav-item ml-auto">
		<a  href="listpesananadmin.php" class="btn btn-light"> kembali </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	
	<!-------akhir navbar----->

    <?php
        include 'koneksi.php';
        $id_pesanan=$_GET['id_pesanan'];
        $data=mysqli_query($koneksi, "SELECT * FROM datapesanan INNER JOIN paket on datapesanan.id_paket = paket.id_paket INNER JOIN user on datapesanan.id_user = user.id_user WHERE  id_pesanan='$id_pesanan'")
         or die (mysqli_error($koneksi));
        $baris=mysqli_fetch_array($data);
    ?>

	<!-------form login----->
<center>
  <div class="col-sm-6">
  <div class="card ">
    <h4 class="card-header text-center">UPDATE PESANAN</h4>
      <div class="card-body card-center">
        <div class="card-body">
        <form action="cek_updatepemesanan.php?id_pesanan=<?php echo $id_pesanan ?>" method="post">
          <label for="id_pesanan">ID PESANAN</label>
          <input type="hidden" name="id_pesanan" id="id_pesanan" class="form-control "value="<?php echo $id_pesanan ?>">
          <input type="text" class="form-control "value="<?php echo $id_pesanan ?>" disabled><br>
          <label for="nama_pelanggan">NAMA PELANGGAN</label>
          <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" value="<?php echo $baris['nama_lengkap']; ?>" disabled><br>
          <label for="keterangan">PAKET</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="paket">Paket</label>
            </div>
            <select class="custom-select" id="paket" name="paket">
            <option selected>Choose...</option>
            <?php
            $paket = mysqli_query($koneksi, "SELECT * from paket");
            foreach($paket as $pkt){ 

            ?>

            <option value="<?php echo $pkt['id_paket']; ?>" <?php if($baris['id_paket'] == $pkt['id_paket']){echo "selected";}?> ><?php echo $pkt['keterangan']."-"."(".$pkt['jumlah_tamu']." tamu)"; ?></option>
            <?php
            }
            ?>

            </select>
            <br>
          </div>

        <label for="tgl_resepsi">TGL RESEPSI</label>
        <input type="date" name="tgl_resepsi" id="tgl_resepsi" class="form-control" value="<?php echo $baris['tgl_resepsi'] ?>"><br>
        <label for="no_telpon">NO TELPON</label>
        <input type="number" name="no_telpon" id="no_telpon" class="form-control" value="<?php echo $baris['no_telpon'] ?>"><br>
        <label for="alamat">ALAMAT</label>
        <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $baris['alamat'] ?>"><br>
        <label for="alamat">Status</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="status">Status</label>
            </div>

            <select class="custom-select" id="status" name="status">
              <option value="Mohon tunggu konfirmasi" <?php if($baris['status']=="Mohon tunggu konfirmasi"){echo "selected";} ?> >Mohon tunggu konfirmasi</option>
              <option value="Belum Bayar" <?php if($baris['status']=="Belum Bayar"){echo "selected";} ?> >Belum Bayar</option>
              <option value="Ditolak" <?php if($baris['status']=="Pembayaran Tidak Berhasil"){echo "selected";} ?> >Pembayaran Tidak Berhasil</option>
              <option value="Sudah Bayar" <?php if($baris['status']=="Sudah Bayar"){echo "selected";} ?> >Sudah Bayar</option>
            </select>
            <br>
          </div>
        <button class="btn btn-primary mt-1" type="submit" name="button">simpan data</button>

        </div>
      </form>
      </div>
  </div>
</center>
	<!----akhir formlogin----->

     </div>
    </div> 
 
	</body>
</html>
