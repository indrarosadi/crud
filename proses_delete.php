<?php
	
	session_start();

	include 'koneksi.php';

	$nis	= $_GET['nis'];

	$querytambah	= mysqli_query($con, "DELETE FROM tbl_siswa WHERE nis=$nis");

	if ($querytambah) {
		header('location: master.php');
	} else {
		echo "GAGAL HAPUS DATA";
	}

?>