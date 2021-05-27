<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">

         body{
          background-repeat: no-repeat, repeat;
          background-position: center; /* Center the image */
          background-size: cover; /* Resize the background image to cover the entire container */
          padding-top: 50px;
        }
        section{
          padding-top: 5rem;
          
        }
       .jumbotron{
          background-image: url("foto/bg3.jpeg");
          background-repeat: no-repeat, repeat;
          background-position: center; /* Center the image */
          background-size: cover; /* Resize the background image to cover the entire container */
          font-weight: bold;
          margin-top: 100px;
          margin-bottom: 100px;
          padding: 100px;
          border-radius: 50px;
          box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        }
        footer{
          background-color: #D2B48C;
          height: 13em;
        }
        #rekomendasi{
          padding: 15px;
        }
        .menuadmin{
          padding: 50px;
          height: 25em;
        }
    </style>
</head>
<body>
	<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['hak_akses']==""){
		header("location:login.php?pesan=gagal");
	}
 include "function.php";
	?>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light " style="background-color: #D2B48C;">
  <div class="container-fluid">
  <a class="navbar-brand font-Dishonorable Mention" >Halo, <?php echo $_SESSION['username']; ?> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto text-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#paket1">PAKET 1</a>
          <span class="material-icons">
             </span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#paket2">Paket 2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#paket3">Paket 3</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#paket4">Paket 4</a>
        </li>
        <li class="nav-item ml-auto">
          <a class="nav-link" href="#deskpaket">Daftar</a>
        </li>
        <li class="nav-item ml-auto">
          <a class="nav-link" href="#history">Riwayat</a>
        </li>
        <li class="nav-item ml-auto">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <div class="jumbotron">
      <h1 class="display-4 text-white">Wedding Organizer</h1>
      <p class="lead text-white">Kemudahan dalam genggaman untuk merencanakan pesta pernikahan idaman
        yang akan dikenang di masa depan!</p>
      <hr class="my-4">
    </div>
  </div>

      
<section id="paket1">
<h2 class= "text-center">PAKET 1</h2>
<div class="row row-cols-1 row-cols-md-2 g-4">
<div class="col-lg-2 col-md-2 col-xs-3 thumb">
    <div class="card">
      <img src="foto/bl1.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Ballroom</h6>
              </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/kue2.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Kue Pernikahan</h6>
              </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/tema7.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Resepsi Outdoor</h6>
              </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/tr4.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Baju Pernikahan</h6>
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/udg3.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Undangan Pernikahan</h6>
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/sv4.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Souvenir</h6>
      </div>
    </div>
  </div>
</div>

<p></p>

<section id="paket2">
<h2 class= "text-center">PAKET 2</h2>
<div class="row row-cols-1 row-cols-md-2 g-4">
<div class="col-lg-2 col-md-2 col-xs-3 thumb">
    <div class="card">
      <img src="foto/bl2.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Ballroom</h6>
              </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/kue4.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Kue Pernikahan</h6>
              </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/tema3.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Resepsi Indoor</h6>
              </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/tr1.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Baju Pernikahan</h6>
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/udg1.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Undangan Pernikahan</h6>
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/sv2.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Souvenir</h6>
      </div>
    </div>
  </div>
</div>

<p></p>
<section id="paket3">
<h2 class= "text-center">PAKET 3</h2>
<div class="row row-cols-1 row-cols-md-2 g-4">
<div class="col-lg-2 col-md-2 col-xs-3 thumb">
    <div class="card">
      <img src="foto/bl3.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Ballroom</h6>
              </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/kue.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Kue Pernikahan</h6>
              </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/rm2.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Resepsi Indoor</h6>
              </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/md3.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Baju Pernikahan</h6>
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/udg5.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Undangan Pernikahan</h6>
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/sv3.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Souvenir</h6>
      </div>
    </div>
  </div>
</div>

<p></p>
<section id="paket4">
<h2 class= "text-center">PAKET 4</h2>
<div class="row row-cols-1 row-cols-md-2 g-4">
<div class="col-lg-2 col-md-2 col-xs-3 thumb">
    <div class="card">
      <img src="foto/bl4.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Ballroom</h6>
              </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/kue4.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Kue Pernikahan</h6>
              </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/rm1.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Resepsi Indoor</h6>
              </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/md2.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Baju Pengantin</h6>
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/udg6.jpeg" class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Undangan Pernikahan</h6>
      </div>
    </div>
  </div>
  <div class="col-lg-2 col-md-3 col-xs-5 thumb">
    <div class="card">
      <img src="foto/sv1.jpeg"class="card-img-top" alt="rekomen">
      <div class="card-body">
        <h6 class="card-title">Souvenir</h6>
      </div>
    </div>
  </div>
</div>

<section id="deskpaket">
<br><div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">PENJELASAN HARGA PAKET</h5><br>
    <div class="container">
        <center>
       
        <table border="1" class="text-center">
        <table class="table">

            <tr>
               <th width="150px"
                style="background-color:#D2B48C"
                style="white-space:nowrap" >ID Paket</th>
               <th width="150px"
                style="background-color:#D2B48C"
                style="white-space:nowrap">Harga</th>
               <th width="150px"
                style="background-color:#D2B48C"
                style="white-space:nowrap">Keterangan</th>
               <th width="150px"
                style="background-color:#D2B48C"
                style="white-space:nowrap">Tipe</th>
                <th width="150px"
                style="background-color:#D2B48C"
                style="white-space:nowrap">Jumlah Tamu</th>
            </tr>
            <tbody>
            <?php
            include 'koneksi.php';
            $data=mysqli_query($koneksi, "SELECT * From paket") or die(mysqli_error($koneksi));
            foreach($data as $baris){ ?>
            <tr>
                <td style="background-color:#DCDCDC"><?php echo $baris['id_paket'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo rupiah ($baris['harga'])?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['keterangan'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['tipe'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['jumlah_tamu'] ?></td>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
  </div>
</div>
</section>
<p></p>
<center>

        <a href="formpesan.php" class="btn btn-primary btn-lg">DAFTAR! </a><br><br>
      
    </center>


<section id="history">
<br><div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">Riwayat Pemesanan Paket anda</h5><br>
    <div class="container">
        <center>
       
        <table border="1" class="text-center">
        <table class="table">

            <tr>
               <th width="150px"
                style="background-color:#D2B48C"
                style="white-space:nowrap" >ID Pesanan</th>
               <th width="150px"
                style="background-color:#D2B48C"
                style="white-space:nowrap">Nama Paket</th>
               <th width="150px"
                style="background-color:#D2B48C"
                style="white-space:nowrap">Tipe</th>
               <th width="150px"
                style="background-color:#D2B48C"
                style="white-space:nowrap">Harga</th>
                <th width="150px"
                style="background-color:#D2B48C"
                style="white-space:nowrap">Status</th>
                <th width="150px"
                style="background-color:#D2B48C"
                style="white-space:nowrap">Aksi</th>
            </tr>
            <tbody>
            <?php
            include 'koneksi.php';
            $username = $_SESSION['username'];
            $data=mysqli_query($koneksi, "SELECT * FROM datapesanan INNER JOIN paket on datapesanan.id_paket = paket.id_paket INNER JOIN user on datapesanan.id_user = user.id_user where user.username = '$username' ") or die(mysqli_error($koneksi));
            if(mysqli_num_rows($data) > 0){
            foreach($data as $baris){ ?>
            <tr>
                <td style="background-color:#DCDCDC"><?php echo $baris['id_pesanan'] ?></td>
                
                <td style="background-color:#DCDCDC"><?php echo $baris['keterangan'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['tipe'] ?></td>
                <td style="background-color:#DCDCDC"><?php echo rupiah ($baris['harga'])?></td>
                <td style="background-color:#DCDCDC"><?php echo $baris['status'] ?></td>
                <td style="background-color:#DCDCDC">
                  <?php if($baris['status']=='Belum Bayar'){?>
                  <a href="formpembayaran.php?id_pesanan=<?php echo $baris['id_pesanan'];?>" class="btn btn-primary">Konfirmasi Pembayaran</a>
                <?php }else{ ?>
                  -
                <?php } ?>
                </td>
            </tr>
            <?php }
            }else{
            ?>
            <tr>
                <td style="background-color:#DCDCDC" colspan="5">Anda belum mendaftar paket apapun.</td>
            </tr>

            <?php } ?>
            </tbody>
        </table>
    </div>
  </div>
</div>
</section>
    

     <!------ footer ---------->
  <footer class="text-dark text-center">
    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
        </svg> wedding@gmail.com</p>
    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </svg> wedding.organizer</p>
    <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg> 25 Cempaka Putih Barat St.Cempaka Putih. Central Jakarta</p><br><br>
      <p>Created by Bella dan Arsya</p>
  </footer>
  <!------ footer ---------->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
</body>
</html>