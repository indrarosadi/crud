<?php
	session_start();
	 if(!isset($_SESSION['admin'])){
	 	header('location: index.php');
	 }
   include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Master</title>
	<link rel="stylesheet" href="style/css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CRUD</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="master.php">Data Master</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">keluar</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<h1 class="text-center">TAMBAH DATA SISWA</h1>
<div class="col-md-4 col-md-offset-4">
    <form method="post" action="proses_tambah.php">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
            </div><div class="form-group">
              <label>Kelas</label>
              <input type="text" name="kelas" class="form-control" placeholder="Kelas">
            </div><div class="form-group">
              <label>Jurusan</label>
              <input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
            </div>
            <button type="submit" class="btn btn-danger btn-block">Tambah Data</button>
          </form>
</div>
	<script src="style/js/jquery-3.2.1.js"></script>
	<script src="style/js/bootstrap.js"></script>
</body>
</html>