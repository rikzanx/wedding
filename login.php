<?php
session_start();
?>
<html>
<head>
	<title>Wedding Organizer</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/fonts.css">
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
</head>

<body>	
	<!--------Navbar----->
	<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #D2B48C;">
  <div class="container-fluid">
    <a class="navbar-brand font-Dishonorable Mention" href="#">Wedding Organizer</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      
    </button>
    <div class="collapse navbar-collapse nav-item ml-auto" id="navbarNav">
      
        <a class="nav-item ml-auto">
		<a  href="index.php" class="btn btn-light"> kembali </a>
        </a>
    </div>
  </div>
</nav>
	
	<!-------akhir navbar----->
  <?php
        include'alert.php';
    ?>



	<!-------form login----->
	<center>
    <div class="col-sm-6">
    <div class="card ">
    <h4 class="card-header text-center">Login</h4>
    <div class="card-body card-center">
      <div class="card-body">
      <form action="cek_login.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" class="form-control "><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" class="form-control "><br>
        <button type="submit" class="btn btn-secondary absolute" name="button">Login<br>
        </button><br>
        <p> Belum punya akun?
                  <a href="registrasi.php">Daftar di sini</a>
                </p>
       
      </form>
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