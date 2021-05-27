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
		<a  href="kelolapaketadmin.php" class="btn btn-light"> kembali </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	
	<!-------akhir navbar----->


	<!-------form login----->
	<center>
    <div class="col-sm-6">
    <div class="card ">
    <h4 class="card-header text-center">Tambah Paket</h4>
    <div class="card-body card-center">
      <div class="card-body">
      <form action="prosestambahpaket.php" method="post">
      <label for="id_paket">ID PAKET </label>
        <input type="text" name="id_paket" id="id_paket" class="form-control "><br>



      <label for="harga">HARGA</label>
        <input type="number" name="harga" id="harga" class="form-control "><br>
        <label for="keterangan">KETERANGAN</label>
        <input type="text" name="keterangan" id="keterangan" class="form-control "><br>

        <label for="tipe">TIPE</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
          <label class="input-group-text" for="tipe">TIPE</label>
        </div>
          <select class="custom-select" id="tipe" name="tipe">
          <option selected>Choose...</option>
          <option value="tipe 1">tipe 1</option>
          <option value="tipe 2">tipe 2</option>
          <option value="tipe 3">tipe 3</option>
          <option value="tipe 4">tipe 4</option>
          </select><br>
        </div>

        <label for="jumlah_tamu">JUMLAH TAMU</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
          <label class="input-group-text" for="jumlah_tamu">TAMU</label>
        </div>
          <select class="jumlah_tamu" id="tipe" name="jumlah_tamu">
          <option selected>Choose...</option>
          <option value="100">100</option>
          <option value="300">300</option>
          <option value="500">500</option>
          <option value="1000">1000</option>

          </select><br>
        </div>

          <button class="btn btn-primary mt-1" type="submit" name="button">simpan data</button>
        
        </div>
      </form>
      <?php
if (isset($_POST['submit'])) {
$hak_akses = $_POST['tipe'];
$sql = $db->query("INSERT INTO paket (tipe) VALUES ('$tipe') ");
header('location:tambahdatapaket.php');
}
?>
 <?php
if (isset($_POST['submit'])) {
$hak_akses = $_POST['jumlah_tamu'];
$sql = $db->query("INSERT INTO paket (jumlah_tamu) VALUES ('$jumlah_tamu') ");
header('location:tambahdatapaket.php');
}
?>

      
      
	  </div>
      </div>
    </div>
    </div>
	</center>
	<!----akhir formlogin----->

     </div>
    </div> 
 
	</body>
</html>
































