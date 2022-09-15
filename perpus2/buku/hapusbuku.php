<?php
	require_once "../config/koneksi.php"; 

	$No_buku = $_GET['No_buku'];

	if (!isset($_GET['conf'])) {
		die("
			Yakin Anda Akan Menghapus Data Ini?<br>
			<a href ='?No_buku=$No_buku&conf=y'>Yes</a> |
			<a href ='../?menu=Buku'>No</a>
			");
	}else{
		$cari = "DELETE FROM buku WHERE No_buku='$No_buku'";

		$hasil = $konek->query($cari);

		if ($hasil) {
			header('location:../index.php?menu=Buku');
		}else{
			die("Gagal Menghapus! : ".$konek->error);
		}
	}

 ?>