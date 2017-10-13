<?php
	
	session_start();

	include 'koneksi.php';

	$nm = $_POST['nama'];
	$kls = $_POST['kelas'];
	$jrs = $_POST['jurusan'];
	

	$querytambah	= mysqli_query($con, "INSERT INTO tbl_siswa VALUES('','$nm','$kls','$jrs')");

	if ($querytambah) {
		header('location: master.php');
	} else {
		echo "GAGAL INSERT";
	}

?>