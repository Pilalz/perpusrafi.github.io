<?php
	require_once "../config/koneksi.php"; 

	$No_faktur = $_GET['No_faktur'];

	if (!isset($_GET['conf'])) {
		die("
			Yakin Anda Akan Menghapus Data Ini?<br>
			<a href ='?No_faktur=$No_faktur&conf=y'>Yes</a> |
			<a href ='../?menu=Peminjaman'>No</a>
			");
	}else{
		$cari = "DELETE FROM peminjaman WHERE No_faktur='$No_faktur'";

		$hasil = $konek->query($cari);

		if ($hasil) {
			header('location:../index.php?menu=Peminjaman');
		}else{
			die("Gagal Menghapus! : ".$konek->error);
		}
	}

 ?>