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
<h1 class="text-center">DATA MASTER SISWA</h1>
<div class="col-md-4 col-md-offset-4">
<table class="table">
  <thead> 
      <th>NIS</th>
      <th>Nama</th>
      <th>Kelas</th>
      <th>Jurusan</th>
      <th>Aksi</th>
  </thead>
  <tbody>
    <?php 
      $q  = mysqli_query($con, "Select * from tbl_siswa");
      //$f  = mysqli_fetch_assoc($q);
      while ( $s = mysqli_fetch_assoc($q)):
     ?>
     <tr>  
      <td><?=$s['nis']?></td>
      <td><?=$s['nama']?></td>
      <td><?=$s['kelas']?></td>
      <td><?=$s['jurusan']?></td>
      <td>
        <a href="edit.php?nis=<?=$s['nis']?>">Edit</a>
        <a href="proses_delete.php?nis=<?=$s['nis']?>">Hapus</a>
      </td>
        </tr> 
      <?php endwhile ?>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="5" class="text-center"><a href="create.php">Tambah Siswa</a></td>
        </tr>
      </tfoot>
    </table>
	<script src="style/js/jquery-3.2.1.js"></script>
	<script src="style/js/bootstrap.js"></script>
</div>
</body>
</html>